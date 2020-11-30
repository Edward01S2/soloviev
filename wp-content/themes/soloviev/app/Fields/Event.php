<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Event extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $event = new FieldsBuilder('event');

        $event
            ->setLocation('post_type', '==', 'event');
        $event
            ->addDatePicker('event date', [
                'display_format' => 'm/d/Y',
                'return_format' => 'Ymd',
            ])
            ->addWysiwyg('about')
            ->addImage('photo')
            ->addGroup('info')
                ->addTimePicker('start time')
                    ->setWidth('25')
                ->addTimePicker('end time', [
                    'label' => 'End Time (Optional)'
                ])
                    ->setWidth('25')
                ->addText('location')
                    ->setWidth('50')
                ->addTextarea('registration details', [
                    'rows' => 2,
                ])
                    ->setWidth('50')
                ->addTextarea('additional', [
                    'rows' => 2,
                ])
                    ->setWidth('50')
            ->endGroup()
            ->addRepeater('links')
                ->addLink('link')
            ->endRepeater()
            ->addRepeater('sponsors')
                ->addImage('logo')
                ->addUrl('url')
            ->endRepeater()
            ;


        return $event->build();
    }
}
