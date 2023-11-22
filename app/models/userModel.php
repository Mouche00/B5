<?php

include("dbModel.php");

class UserModel{
    private $userId;
    private $username;
    private $pw;


    public function __construct($userId,$username,$pw){
        $this->userId = $userId;

    }

    public function bringAllUsers(){
        
    }

}




?>
