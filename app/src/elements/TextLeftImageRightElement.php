<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class TextLeftImageRightElement extends BaseElement
{
    private static $singular_name = 'Text Left Image Right element';

    private static $plural_name = 'Text Left Image Right elements';

    private static $description = 'Text Left Image Right';

    private static $db = ['Text' => 'HTMLText'];

    private static $has_one = ['Image' => Image::class];

    private static $owns = ['Image'];

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(HTMLEditorField::create('Text'));
        $fields->push(UploadField::create('Image'));

        return $fields;
    }

    public function getType()
    {
        return 'Text Left Image Right Element';
    }
}