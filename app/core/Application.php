<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/04/2018
 * Time: 13:40
 */
class Application
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $this->prepareURL();
        var_dump($this->controller);
        if (file_exists(CONTROLLER . $this->controller . '.php')) {
            //$this->controller will print HomeController assuming default dir is selected
            //Thus if file_exists() start a new instance of the Controller Class
            $this->controller = new $this->controller;
            //method_exists(@param1 = class, @param2 = methodName)
            if (method_exists($this->controller, $this->action)) {
                //pass parameters to method we want to use via call_user_func_array()
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        } else {
            echo 'FILE DOES NOT EXIST';
        }


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