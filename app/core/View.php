<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 20/04/2018
 * Time: 21:14
 */

/**
 * Class View
 * In ever View() Class I would need TWO pieces of information
 * Information about Every HTML file that I want to represent for the views ACTION in its CONTROLLER
 */
class View
{
    protected $view_file; //represents where file is
    protected $view_data; //data you want to pass

    public function __construct($view_file, $view_data)
    {
        $this->view_file = $view_file; //equal to view_file you are receiving
        $this->view_data = $view_data;  //equal to view_data you are receiving
    }

    //acess the views creared
    //when you want to access the html I am simply going to call a function
    //This gives us more access over when to create or render the view

    public function render(){
        //if file exists we will go to the view() method which was set in homeController()
        // we are creating the path inside the home inside the view so if file exists only thing we need to do is:
        //include the file
        if(file_exists(VIEW . $this->view_file .'.php')){
            include VIEW . $this->view_file .'.php';
        }
    }

    public function getAction(){
        return (explode('\\', $this->view_file)[1]); //will return two elements, we know we want the 2nd one so we can hardcode it however WE MUST DO SOME CHECKING
    }



}