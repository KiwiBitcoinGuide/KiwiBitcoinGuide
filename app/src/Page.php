<?php


namespace {

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldAddNewButton;
use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
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

        private static $many_many = [
            'RelatedPages' => Page::class
        ];
        

        public function getCMSFields() {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Summary'));
            $fields->addFieldToTab('Root.Main', UploadField::create('PagePreviewImage')->setRightTitle('Shows this image in social media sites when linking this page'));
            // ($name, $title = null, SS_List $dataList = null, GridFieldConfig $config = null)
            $gfConfig = GridFieldConfig_RelationEditor::create();
            $gfConfig->removeComponentsByType(new GridFieldAddNewButton());
            $fields->addFieldToTab('Root.RelatedPages', GridField::create('RelatedPages', 'Related Pages', $this->RelatedPages(), $gfConfig));
            return $fields;
        }
    }
}
