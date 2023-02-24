<?php

use SilverStripe\Assets\Image;
use SilverStripe\ORM\DataObject;

class Project extends DataObject
{
    private static $db = [
        'Title' => 'Varchar(255)',
        'Text'=> 'Varchar(255)',
        'Link'=> 'Text'
    ];

    private static $has_one = ['Image' => Image::class];
    private static $owns = ['Image'];
}
