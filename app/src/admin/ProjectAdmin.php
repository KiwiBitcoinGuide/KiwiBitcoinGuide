<?php
use SilverStripe\Admin\ModelAdmin;

class ProjectAdmin extends ModelAdmin 
{

    private static $managed_models = [
        Project::class,
    ];

    private static $url_segment = 'projects';

    private static $menu_title = 'Projects';
}