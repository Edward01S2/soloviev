<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Advisor extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $advisor = new FieldsBuilder('advisor');

        $advisor
            ->setLocation('post_type', '==', 'advisor');

        $advisor
            ->addText('title')
            ->addTextarea('excerpt')
            ->addWysiwyg('content');

        return $advisor->build();
    }
}
