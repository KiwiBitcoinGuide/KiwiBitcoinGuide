<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Core\Convert;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\View\Parsers\URLSegmentFilter;

class BaseElementExtension extends SilverStripe\ORM\DataExtension {


	private static $db = [
        'MenuTitle' => 'Varchar(255)',
        'HideFromNav' => 'Boolean',
    ];

    private static $owns = [
    ];

	private static $has_one = [
    ];

    public function getCMSFields() 
    {
        $fields = $this->owner->getCMSFields();

        $fields->addFieldToTab("Root.Main", 
            TextField::Create("MenuTitle")
        );
        $fields->addFieldToTab("Root.Main", 
            CheckboxField::Create("HideFromNav")
        );


        return $fields;
    }

    public function MenuTitleAtt() {
        $filter = URLSegmentFilter::create();
        $filteredTitle = $filter->filter($this->owner->MenuTitle);
        
        return $filteredTitle;
    }
}