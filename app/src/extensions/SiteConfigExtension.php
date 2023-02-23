<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends SilverStripe\ORM\DataExtension {


	private static $db = [
        'FooterContent' => 'HTMLText'
    ];

	private static $has_one = [
        // 'Logo' => Image::class
    ];

    public function updateCMSFields(FieldList $fields) 
    {
        $fields->addFieldToTab("Root.Main", 
            HTMLTextEditor::Create("FooterContent")
        );
    }
}