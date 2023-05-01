<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ContactBarElement extends BaseElement
{
    private static $singular_name = 'Contact Bar element';

    private static $plural_name = 'Contact Bar elements';

    private static $description = 'Contact Bar ';

    private static $db = [
    ];

    private static $has_one = [];

    private static $owns = [];

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        // $fields->push(HTMLEditorField::create('Text'));

        return $fields;
    }

    public function getType()
    {
        return 'NZB Contact Bar';
    }
}