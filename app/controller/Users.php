<?php
/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 17/04/2018
 * Time: 19:56
 */
require_once 'app/model/DB_Modules.php';
class Users extends DB_Modules
{
    protected $userID;
    protected $email;
    protected $pword;
    public $name;
    protected $db;

    function __construct()
    {
        #TODO set path to absolute path via constant names
        $this->db = Db::getInstance();
    }

    public function setName($userName)
    {
        $this->name = $userName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setEmail($userEmail)
    {
        $this->email = $userEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setUserID($userID)
    {
        $this->userID = $userID;
    }

    public function getUserID()
    {
        return $this->userID;
    }

    public function setPword($userPword)
    {
        $this->pword = $userPword;
    }

    public function getPword()
    {
        return $this->pword;
    }

    public function login($email, $pword)
    {
        #if($_SERVER['REQUEST_METHOD'] == 'POST') {
        #if (isset($_POST['submitBtn'])) {
        //submited login form btn clicked
        //sanatize input
        $clean = array();
        foreach ($_POST as $index => $clean) {
            echo $clean = $_POST[$index];
            htmlspecialchars($clean);
        }
        $loginModule = new DB_Modules();
        $userID = $loginModule->DBloginUser($email, $pword);
        if($userID != NULL){
            session_start();
            $userInfo = $loginModule->getUserInfoCall($userID);
            foreach ($userInfo as $key => $info){
                echo $key;
                echo $_SESSION[$key] = $info;
            }
        }
        #}//btn isset
        #}//server post
    }//function

    public function getUserInfo($userID)
    {
        echo '<br />';
       echo $this->userID = $userID;
       echo '<br />';
        if (isset($userID)) {
            echo 'ISSET';
            $userInfoModule = new DB_Modules();
            $userInfo[] = $userInfoModule->getUserInfoCall($userID);
            echo '<pre>';
            print_r($userInfo);
            if (is_array($userInfo)) {
                foreach ($userInfo as $info){
                   // echo $info;
                    echo '<br />';
                 //echo $_SESSION[$index] = $info;
                 echo '<br />';
                }
            }
        }
    }
}

