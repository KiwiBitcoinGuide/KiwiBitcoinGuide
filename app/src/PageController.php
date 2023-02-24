<?php


namespace {

use SilverStripe\View\Requirements;
use SilverStripe\CMS\Controllers\ContentController;

    class PageController extends ContentController
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

            Requirements::javascript('https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js');
            Requirements::javascript('https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6391b419017fec8c8a3672e2');
            Requirements::javascript($this->ThemeDir().'/javascript/nz-bitcoiners.js');

            Requirements::customScript(<<<js
                WebFont.load({
                    google: {
                        families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]
                    }
                });
                ! function(o, c) {
                    var n = c.documentElement,
                        t = " w-mod-";
                    n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
                }(window, document);
js
            );
        }
    }
}
