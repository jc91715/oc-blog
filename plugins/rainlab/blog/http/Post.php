<?php namespace Rainlab\Blog\Http;

use Backend\Classes\Controller;

/**
 * Post Back-end Controller
 */
class Post extends Controller
{
    public $implement = [
        'Mohsin.Rest.Behaviors.RestController'
    ];

    public $restConfig = 'config_rest.yaml';

}
