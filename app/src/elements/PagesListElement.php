<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class PagesListElement extends BaseElement
{
    private static $singular_name = 'Pages List element';

    private static $plural_name = 'Pages List elements';

    private static $description = 'Shows linked Pages such as Articles and Guides';
    
    private static $inline_editable = false;
    
    private static $db = [
    ];

    private static $has_one = [];

    private static $many_many = [
        'LinkedPages' => Page::class
    ];

    private static $many_many_extraFields = [
        'LinkedPages' => ['SortOrder' => 'Int']
    ];

    private static $owns = [];

	public function getCMSFields()
    {
        $this->beforeupdatecmsfields(function($fields) {

            $gf = $fields->dataFieldByName('LinkedPages');
            if($gf) {
                $gfconf = $gf->getConfig();
                $gfconf->addComponent(new GridFieldSortableRows('SortOrder'));
            }            

        });

        return parent::getCMSFields();
    }

    public function getType()
    {
        return 'NZB Pages List Element';
    }
}