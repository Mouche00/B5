<?php

const CONFIG = [
    'db'=>'mysql:dbname=db_bankmanagement;host=localhost;port:3306',
    'db_user' => 'root',
    'db_password' => ''
];

class DataProvider {
    protected function connect() {
        try {
           return new PDO(CONFIG['db'],CONFIG['db_user'],CONFIG['db_password']);
        } catch (PDOException $e) {
            return null;
        }
    }
}
?>

