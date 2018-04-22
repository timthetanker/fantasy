<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 20/04/2018
 * Time: 19:01
 */
class Application
{
    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        //must be able to parse info coming from url / server
        #echo $_SERVER['REQUEST_URI'];
        $this->prepareURL();
        #echo $this->controller . '<br>' . $this->action . print_r($this->params);
        //system will look according to url structure
        //file_exists() will look in the Const CONTROLLER directory and then create object of that controller
        /**
         * 1 So we checked if file_exists()
         * 2 if it does we created a new instance of the homeController() object
         * 3 Now we must check if the method exists (index()) in this case
         * 4 if it does we can simply call the method and pass the paramater
         */
        if(file_exists(CONTROLLER . $this->controller . '.php')){
            //creating object of class homeController()
            $this->controller = new $this->controller;
            #$this->controller->index();
            //if class exists and action = called method in class homeController
            if(method_exists($this->controller, $this->action)){
                //call_user_func_array can pass all the parameters as elements to the method
                /**
                 * Explanation: Array(Name of Class & Method ) + Params
                 * On this Controller (homeController()) call the @action param which is a method
                 * [$this->controller, $this->action]
                 * @params = $this->params
                 */
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    protected function prepareURL(){
        $request = trim($_SERVER['REQUEST_URI'], '/'); // want to get rid of backslash at end of url
        //if request not empty split into different parts
        if(!empty($request)){
            //get info from url split into different parts
            $url = explode('/',$request);
            /**
             * first thing we need is to get the controller
             *if the 1st param @controller isset use the value
             * in this case the first param isset to home so we will call 'Controller'
             *if not set use the default value homeController
             */
            $this->controller = isset($url[0]) ? $url[0]. 'Controller' : 'homeController';
            //goes to default if not set
            $this->action = isset($url[1]) ? $url[1] : 'index';
            //we can remove $url[0] and $url[1] from array what is left is the url parameter
            unset($url[0], $url[1]);
            //get the values of the array if not set create empty array
            $this->params = !empty($url) ? array_values($url) : [];

            #var_dump($url);

        }
    }
}