<?php

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;

class SiteConfigExtension extends SilverStripe\ORM\DataExtension {


	private static $db = [
        'FooterContent' => 'HTMLText'
    ];

    private static $owns = [
        'Logo',
        'DefaultOgpImage'
    ];

	private static $has_one = [
        'Logo' => File::class,
        'DefaultOgpImage' => File::class
    ];

    public function updateCMSFields(FieldList $fields) 
    {
        $fields->addFieldToTab("Root.Main", 
            UploadField::Create("Logo")
        );
        $fields->addFieldToTab("Root.Main", 
            UploadField::Create("DefaultOgpImage")
        );
        $fields->addFieldToTab("Root.Main", 
            HTMLEditorField::Create("FooterContent")
        );

    }
}