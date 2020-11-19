<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Timeline extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Timeline';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Timeline block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'items' => [
            ['item' => 'Item one'],
            ['item' => 'Item two'],
            ['item' => 'Item three'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            'pdf' => get_field('pdf'),
            'posts' => $this->posts(),
            'years' => $this->years(),
            'show' => get_field('show'),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $timeline = new FieldsBuilder('timeline');

        $timeline
            ->addTrueFalse('show')
            ->addText('title')
            ->addFile('pdf');

        return $timeline->build();
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }

    public function years() {
        $args = array(
            'post_type' => 'history',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'orderby' => 'meta_value',
            'meta_key' => 'year',
            'order' => 'ASC',
        );

        $posts = new \WP_Query($args);
        $years = [];

        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $years['all'][] = intval(get_field('year', $id));

        endwhile;
        wp_reset_query();

        $years['count'] = count($years['all']);
        $years['min'] = reset($years['all']);
        $years['max'] = end($years['all']);
        $years['min_100'] = intval(round(reset($years['all']), -2));
        $years['max_100'] = intval(round(end($years['all']), -2));
        $years['current'] = intval(date("Y"));
        $years['max_10'] = intval(ceil($years['current']/10) * 10);
        $years['step'] = range($years['min_100'], $years['max_10'], 10);

        return $years;

    }

    public function posts() {
        $args = array(
            'post_type' => 'history',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
            'orderby' => 'meta_value',
            'meta_key' => 'year',
            'order' => 'ASC',
        );

        $posts = new \WP_Query($args);

        $post_data = [];
        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $post_data[] = [
            'title' => get_the_title(),
            'year' => get_field('year', $id),
            'content' => get_field('content', $id),
            'image' => get_field('image', $id),
        ];

        endwhile;
        wp_reset_query();

        return $post_data;
    }
}
