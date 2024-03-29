<?php

use SilverStripe\ORM\DataObject;

class Event extends DataObject
{
    private static $db = [
        'Title' => 'Varchar(255)',
        'Date' => 'Datetime',
        'Link'=> 'Text',
        'Location'=> 'Varchar(255)',
        'LocationLink'=> 'Text'
    ];

    private static $summary_fields = [
        'Title',
        'Date.Nice',
        'Link',
        'Location',
        'LocationLink'
    ];

    private static $default_sort = 'Date DESC';
    private static $has_one = [];
}
