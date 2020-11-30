<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class EventPast extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $eventPast = new FieldsBuilder('event_past');

        $eventPast
            ->setLocation('post_type', '==', 'event');

        $eventPast
            ->addTrueFalse('show video')
            ->addImage('video poster')
                ->conditional('show video', '==', '1')
            ->addUrl('video link')
                ->conditional('show video', '==', '1')
            ->addTrueFalse('show gallery')
            ->addGallery('gallery')
                ->conditional('show gallery', '==', '1')
            ->addLink('gallery link')
                ->conditional('show gallery', '==', '1')
            ->addTrueFalse('show press')
            ->addRepeater('press', [
                'collapsed' => 'publication'
            ])
                ->conditional('show press', '==', '1')
                ->addTextarea('content')
                ->addText('publication')
            ->endRepeater();


        return $eventPast->build();
    }
}
