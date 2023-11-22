<?php


define("serverName", "localhost");
define("username", "root");
define("password", "");
define("database", "db_BankManagement");


class database{
    private static $cnx;

    public static function connectToDatabase() {
        if (!self::$cnx){
           self::$cnx = new mysqli(serverName,username,password,database);
           
           if(self::$cnx->connect_error){
              die(self::$cnx->connect_error);
           }
           
           return self::$cnx;
        }
    }
}

?>