<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Events extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Events';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Events block.';

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
            'content' => get_field('content'),
            'upcoming' => $this->upcoming(),
            'past' => $this->past(),
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
        $events = new FieldsBuilder('events');

        $events
            ->addTrueFalse('show')
            ->addText('title')
            ->addWysiwyg('content');

        return $events->build();
    }

    public function upcoming() {
        $args = [
            'post_type'   => 'event',
            'meta_key' => 'event date',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query'=> array(
                array(
                    'key' => 'event date',
                    'compare' => '>=',
                    'value' => date("Y-m-d"),
                    'type' => 'DATE'
                )
            ),
        ];

        $posts = new \WP_Query($args);

        $event_data = [];
        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $event_data[] = [
            'title' => get_the_title(),
            'date' => date('F j, Y', strtotime(get_field('event date', $id))),
            'content' => get_field('about', $id),
            'image' => get_field('photo', $id),
            'link' => get_the_permalink($id),
        ];

        endwhile;
        wp_reset_query();

        return $event_data;
    }

    public function past() {
        $args = [
            'post_type'   => 'event',
            'meta_key' => 'event date',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_query'=> array(
                array(
                    'key' => 'event date',
                    'compare' => '<',
                    'value' => date("Y-m-d"),
                    'type' => 'DATE'
                )
            ),
        ];

        $posts = new \WP_Query($args);

        $event_data = [];
        while($posts->have_posts()): $posts->the_post();
        
        $id = get_the_ID();

        $event_data[] = [
            'title' => get_the_title(),
            'date' => date('F j, Y', strtotime(get_field('event date', $id))),
            'content' => get_field('about', $id),
            'image' => get_field('photo', $id),
            'link' => get_the_permalink($id),
        ];

        endwhile;
        wp_reset_query();

        return $event_data;
    }


}
