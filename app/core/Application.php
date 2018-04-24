<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/04/2018
 * Time: 13:40
 */
class Application
{
    protected $controller, $action, $params;

    public function __construct()
    {
        $this->prepareURL();


    }

    public function prepareURL(){
        $requested = $_SERVER['REQUEST_URI']; //get URL
        if(!empty($url)){
           $url =  explode('/',$requested);
           isset($url[0]) ? $this->controller = $url[0] : $this->controller = 'homeController';
           isset($url[0]) ? $this->controller = $url[0] : $this->action = 'index';

             var_dump($url);

            //we can remove $url[0] and $url[1] from array what is left is the url parameter
            unset($url[0], $url[1]);
            //get the values of the array if not set create empty array
            //array values returns the values of array, NOT THE INDEXES.
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }
}