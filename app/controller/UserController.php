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
    #TODO get bettern routing option?
    #TODO Alternatively rename controller login and build new for inside profile UserController()?

    public function __construct()
    {
        $this->getLoginDetails();
        //var_dump($this->user_data);
        $this->index($this->user_data['email'], $this->user_data['password']);
    }

    public function getLoginDetails()
    {
        foreach ($_POST as $index => $value) {
            $this->user_data[$index] = $value;
        }

        if (isset($this->user_data)) {
            return $this->user_data;
        }
        return false;
    }

    public function index($email = '', $pword = '')
    {
        echo 'SUCCESS';
        $this->view('users\index', [
            'email' => $this->user_data['email'],
            'pword' => $this->user_data['password'],
        ]);
        var_dump($this);
        var_dump($this->user_data);
        $this->model('User_Model', '');
        $this->model->loginUser($this->user_data['email'], $this->user_data['password']);
        $this->view->render();
    }
}

