<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Advisors extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Advisors';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Advisors block.';

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
            'show' => get_field('show'),
            'title' => get_field('title'),
            'advisors' => $this->advisors(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $advisors = new FieldsBuilder('advisors');

        $advisors
            ->addTrueFalse('show')
            ->addText('title');
            // ->addRelationship('advisors', [
            //     'post_type' => 'advisor',
            // ]);

        return $advisors->build();
    }

    public function advisors() {

        $args = array(
            'post_type' => 'advisor',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
        );

        $posts = new \WP_Query($args);
        
            //return $advisors;
        $data = [];
        if($posts->have_posts()) {
            while($posts->have_posts()): $posts->the_post();
            
            $id = get_the_ID();

            $data[] = [
                'name' => get_the_title($id),
                'title' => get_field('title', $id),
                'excerpt' => get_field('excerpt', $id),
                'image' => get_the_post_thumbnail_url($id),
                'link' => get_the_permalink($id),
            ];
            
            endwhile;
            wp_reset_query();

            return $data;
        }


        

        return false;
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
}
