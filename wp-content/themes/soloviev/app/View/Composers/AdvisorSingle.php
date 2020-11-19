<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class AdvisorSingle extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-advisor',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'name' => get_the_title(),
            'position' => get_field('title'),
            'image' => get_the_post_thumbnail_url(),
            'content' => get_field('content'),
            'next' => get_adjacent_post(),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */

    // public function post_link() {
    //   if($next = get_adjacent_post()) {
    //     return $next;
    //   }
    // }


}
