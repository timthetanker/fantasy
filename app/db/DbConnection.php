<?php

/**
 * Created by PhpStorm.
 * User: Tim
 * Date: 19/04/2018
 * Time: 20:37
 */
  class Db {
      private static $instance = NULL;

      private function __construct() {}

      private function __clone() {}

      public static function getInstance() {
          if (!isset(self::$instance)) {
              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              self::$instance = new PDO('mysql:host=localhost;dbname=fantasy', 'root', '', $pdo_options);
          }
          return self::$instance;
      }
  }
