<?php

class DB
{
    private static $instance = null;
    public static function getInstance() {
        if (!isset(self::$instance)) {
          try {
            self::$instance = new PDO('mysql:host=localhost:8083;dbname=MYSQL_DATABASE', 'MYSQL_USER', 'MYSQL_PASSWORD');
            self::$instance->exec("SET NAMES 'utf8'");
          } catch (PDOException $ex) {
            die($ex->getMessage());
          }
        }
        return self::$instance;
      }
}
