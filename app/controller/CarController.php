<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 22/04/2018
 * Time: 09:21
 */
class CarController extends Controller
{
    public function index(){

        $this->model('car'); //include the model() method which comes from Controller() class
        //I put the below in brackets (create assosiative array) and assign it key cars since we would like to access the array as a whole for later to loop on and manipulate
        $this->view('car' . DIRECTORY_SEPARATOR . 'index', ['cars' => $this->model->getCars()]);
        $this->view->render();
        #var_dump($this->model->getCars());//will return list of all car makes, modules, years, price etc
    }
}