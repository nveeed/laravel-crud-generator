<?php

$config = [

    /*
     * Views that will be generated. If you wish to add your own view,
     * make sure to create a template first in the
     * '/resources/views/crud-templates/views' directory.
     * */
    'views' => [
        'index',
        //'edit',
        //'show',
        //'create',
    ],

    /*
     * Directory containing the templates
     * If you want to use your custom templates, specify them here
     * */
    'templates' => 'vendor.crud.ng-templates',

    /*
     * Whether to generate angular files
     * */
    'generate-ng-app' => true,

];

/*
 * Layout template used when generating views
 * */
$config['layout'] = 'layouts.app';

return $config;