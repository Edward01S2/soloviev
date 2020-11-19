<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

use App\Fields\Partials\Form;

class ThemeSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Theme Settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Theme Settings';

    /**
     * The option page field group.
     *
     * @return array
     */
    public function fields()
    {
        $themeSettings = new FieldsBuilder('theme_settings');

        $themeSettings
            ->addTab('Logos')
                ->addImage('Logo')
                ->addImage('Logo Alt')
            ->addTab('Scripts')
                ->addTextarea('header_scripts', [
                    'label' => 'Header Scripts',
                    'rows' => '15'
                ])
                ->addTextarea('footer_scripts', [
                    'label' => 'Footer Scripts',
                    'rows' => '15'
                ])
            ->addTab('Footer')
                ->addText('Form Title')
                ->addText('Form Subtext')
                ->addWysiwyg('Footer Content')
                ->addFields($this->get(Form::class))
                ->addText('Footer Text')
            ->addTab('Social')
                ->addRepeater('Social')
                    ->addImage('icon')
                    ->addUrl('url')
                    ->addColorPicker('bg')
                ->endRepeater();

        return $themeSettings->build();
    }
}
