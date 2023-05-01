<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class EventsElement extends BaseElement
{
    private static $singular_name = 'Events element';

    private static $plural_name = 'Events elements';

    private static $description = 'Events element lists all the upcoming events';

    private static $db = [
        'Title' => 'Varchar(255)',
        'Text' => 'HTMLText'
    ];

    private static $has_one = ['Image' => Image::class];

    private static $owns = ['Image'];

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(TextField::create('Title'));
        $fields->push(HTMLEditorField::create('Text'));
        $fields->push(UploadField::create('Image'));

        return $fields;
    }

    public function getType()
    {
        return 'NZB Events Element';
    }

    public function Events() {
        return Event::get();
    }
}