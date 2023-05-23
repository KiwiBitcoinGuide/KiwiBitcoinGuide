<?php


namespace {

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

    class Page extends SiteTree
    {
        private static $db = [
            'Summary' => 'HTMLText',
        ];

        private static $has_one = [
            'PagePreviewImage' => Image::class
        ];
        
        private static $owns = [
            'PagePreviewImage'
        ];
        
        private static $belongs_many_many = [
            'PageListElement' => PagesListElement::class
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Summary'));
            $fields->addFieldToTab('Root.Main', UploadField::create('PagePreviewImage')->setRightTitle('Shows this image in social media sites when linking this page'));

            return $fields;
        }
    }
}
