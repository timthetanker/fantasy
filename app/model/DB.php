<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 24/04/2018
 * Time: 19:58
 */
class DB
{
    private static $instance = NULL;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=fantasy', 'root', '', $pdo_options);
            if (self::$instance) {
                echo 'CONNECTED';
            }
        }
        return self::$instance;
    }

    private function __clone()
    {
    }
}
