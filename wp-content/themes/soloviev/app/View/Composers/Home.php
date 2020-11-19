<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.front-page',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'block' => $this->slider(),
        ];
    }

    public function slider() {
      if ( function_exists( 'get_field' ) ) {
        $pid = get_post();
        //return $pid_content;
        if ( has_blocks( $pid ) ) {
          $blocks = parse_blocks( $pid->post_content );
          //return $blocks;
          foreach ( $blocks as $block ) {
            if ( $block['blockName'] === 'acf/home-landing' ) {
              return get_field('items', $block['attrs']['id']);
              //return $post_format = $post_layout['items'];// name of the field
            } 
            // elseif ( $block['blockName'] === 'core/block' ) {
            //   $block_content = parse_blocks( get_post( $block['attrs']['ref'] )->post_content );
            //   if ( $block_content[0]['blockName'] === 'acf/your-block-name' ) {
            //     // Access to "some" block data
            //   }
            // }
          }
        }
      }

    }

}
