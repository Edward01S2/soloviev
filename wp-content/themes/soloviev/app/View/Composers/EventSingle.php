<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class EventSingle extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-event',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'title' => get_the_title(),
            'bg' => get_the_post_thumbnail_url(),
            'past' => $this->pastEvent(),
            'date' => date('F j, Y', strtotime(get_field('event date'))),
            'about' => get_field('about'),
            'photo' => get_field('photo'),
            'start' => get_field('info')['start time'],
            'end' => get_field('info')['end time'],
            'location' =>  get_field('info')['location'],
            'registration' =>  get_field('info')['registration details'],
            'additional' =>  get_field('info')['additional'],
            'links' => get_field('links'),
            'sponsors' => get_field('sponsors'),
            'show_press' => get_field('show press'),
            'press' => get_field('press'),
            'show_video' => get_field('show video'),
            'video_bg' => get_field('video poster'),
            'video_link' => get_field('video link'),
            'show_gallery' => get_field('show gallery'),
            'gallery' => get_field('gallery'),
            'gallery_link' => get_field('gallery link'),
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */

    public function pastEvent() {

      $date = new \DateTime("now", new \DateTimeZone('America/New_York') );
      $curr_date = strtotime($date->format('Ymd'));
      $event_date = strtotime(get_field('event date'));

      if($event_date < $curr_date) {
        return true;
      }

      return false;
    }


}
