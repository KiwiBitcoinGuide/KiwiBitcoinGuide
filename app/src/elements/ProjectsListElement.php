<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ProjectsListElement extends BaseElement
{
    private static $singular_name = 'Projects List element';

    private static $plural_name = 'Projects List elements';

    private static $description = 'Projects List';

    private static $db = ['Text' => 'HTMLText'];

    private static $has_one = [];

    private static $owns = [];

	public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->push(HTMLEditorField::create('Text'));

        return $fields;
    }

    public function getType()
    {
        return 'Projects List';
    }

    public function Projects() {
        return Project::get();
    }
}