<?php
use SilverStripe\Admin\ModelAdmin;

class MyAdmin extends ModelAdmin 
{

    private static $managed_models = [
        Event::class,
    ];

    private static $url_segment = 'events';

    private static $menu_title = 'Events';
}