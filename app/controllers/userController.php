<?php

require_once("../models/DataProvider.php");
require_once("../models/user.php");
require_once("../models/roleOfUserModel.php");


session_start();
class UserController extends DataProvider{

    public function login ($username,$pw){
        
        $loggingUser = new user();
        $loggingUserData = $loggingUser->getUserByUsername($username);

        if($loggingUserData && password_verify($loggingUserData["pw"],$pw)){
           
            $loggingUserRole = new RoleOfUser(1,1,'admin');
            $roleOfLoggingUserData = $loggingUserRole->getRoleByUserId($loggingUserData["userId"]);

            if($roleOfLoggingUserData["roleName"] == "admin"){
                
            }
     
        }

        else{
            
            redirect("../views/login.php",false);

        }
        
        

        

    }
}
    



?>