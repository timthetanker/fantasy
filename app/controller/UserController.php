<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 22/04/2018
 * Time: 09:21
 */
class UserController extends Controller
{
    protected $user_data = [];

    public function index()
    {
        #TODO get $_POST data from login form
        echo 'SUCCESS';
        $this->view('users\index', '');
        $this->model('User_Model', '');
        $this->model->loginUser('john@gmail.com', 'John');
        $this->view->render();
    }
}
