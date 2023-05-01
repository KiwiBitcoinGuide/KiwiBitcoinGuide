<?php


namespace {

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\CMS\Model\SiteTree;

    class Page extends SiteTree
    {
        private static $db = [
            'Summary' => 'HTMLText'
        ];

        private static $has_one = [];

        private static $belongs_many_many = [
            'PageListElement' => PagesListElement::class
        ];

        public function getCMSFields() {
            $fields = parent::getCMSFields();

            $fields->addFieldToTab('Root.Main', HTMLEditorField::create('Summary'));

            return $fields;
        }
    }
}
