<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class History extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $history = new FieldsBuilder('history');

        $history
            ->setLocation('post_type', '==', 'history');

        $history
            ->addNumber('year')
            ->addWysiwyg('content')
            ->addImage('image');

        return $history->build();
    }

    
}
