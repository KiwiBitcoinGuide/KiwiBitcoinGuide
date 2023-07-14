<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

class IframeElement extends BaseElement
{
    private static $singular_name = 'iFrame element';

    private static $plural_name = 'iFrame elements';

    private static $description = 'iFrame';

    private static $db = [
        'src' => 'HTMLText',
        'height' => 'Int'
    ];

    private static $has_one = [];

    private static $owns = [];

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(TextareaField::create('src'));
        $fields->push(TextField::create('height', 'height in pixels (integer)'));

        return $fields;
    }

    public function getType()
    {
        return 'NZB iFrame Element';
    }
}