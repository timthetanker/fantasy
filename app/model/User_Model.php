<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/04/2018
 * Time: 19:44
 */
class User_Model extends DB
{
    /**@data_file 1st we must know where the filelist of cars are located
     ** @inventory 2nd Need an array which keeps value of all the cars in the filelist, so we can loop over them one by one later
     **/

    protected $db;
    protected $userInfo = [];

    public function __construct()
    {
        # self::$data_file = DATA . 'cars.txt'; //include the text file
        $this->db = DB::getInstance();

    }

    //made private to avoid conflicts and prevents tampering of data
    public function loginUser($email, $pword)
    {
        $sql = "SELECT * FROM users WHERE email = :email AND pword = :pword";
        $stmnt = $this->db->prepare($sql);
        $stmnt->bindValue(':email', $email);
        $stmnt->bindValue(':pword', $pword);
        $stmnt->execute();
        if ($stmnt->rowCount() > 0) {

            $user = $this->userInfo = $stmnt->fetchAll();
            var_dump($user);
            print_r($user);
        }
    }



    //beacuse load() function is private we need to create an accessor function which is a function which can call the load function and return / access @inventory

    /*public function getCars(){
        $this->load();
        return $this->inventory;
    }*/

    /*private function deleteCars(){
        if(file_exists(DATA . 'cars.txt')){


        }*/
}

//many other ways of doing below its important that you familiarize yourself with new and different ways
/*class Car
{
    /**@data_file 1st we must know where the filelist of cars are located
     ** @inventory 2nd Need an array which keeps value of all the cars in the filelist, so we can loop over them one by one later
     **/
/*
    protected static $data_file;
    protected $inventory = [];

    public function __construct()
    {
        self::$data_file = DATA . 'cars.txt'; //include the text file
    }

    //made private to avoid conflicts and prevents tampering of data
    private function load(){
        if(file_exists(DATA . 'cars.txt')){
            //file() PHP function takes file dir and file name and will return all the info as an array
            $this->inventory = file(DATA . 'cars.txt');
        }
    }

    //beacuse load() function is private we need to create an accessor function which is a function which can call the load function and return / access @inventory
    public function getCars(){
        $this->load();
        return $this->inventory;
    }
}
*/