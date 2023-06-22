<?php

namespace {

use SilverStripe\CMS\Controllers\ContentController;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;

    class IframePage extends Page
    {
        private static $db = [
            'Src' => 'Text',
            'Height' => 'Int',
        ];

        private static $has_one = [];

        public function getCMSFields() {
            $fields = parent::getCMSFields();

            $fields->insertAfter('Content', TextareaField::create('Src', 'Iframe Src'));
            $fields->insertAfter('Src', TextField::create('Height', 'iframe height in pixels (integer)'));

            return $fields;
        }
    }

    class IframePageController extends PageController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
        }



    }
}
