<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class HeroBannerElement extends BaseElement
{
    private static $singular_name = 'Hero banner element';

    private static $plural_name = 'Hero banner elements';

    private static $description = 'Hero banner';

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
        return 'NZB Hero Banner Element';
    }
}