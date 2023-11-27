<?php

require_once('DataProvider.php');

class Users extends DataProvider {
   public function addUser($username,$pw,$gendre,$role,$ville, $quartier,$rue,$codePostal,$email,$tel) {
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'START TRANSACTION;

         INSERT INTO users (username, pw, gendre)
         VALUES (:username,:pw,:gendre);
   
   
         SET @userId = LAST_INSERT_ID();
   
        INSERT INTO roleofuser (userId, name)
        VALUES (@userId, :role);
   
        INSERT INTO adress (ville, quartier,rue,codePostal,email,tel,userId)
        VALUES ("test", "admin","test","test","test@gmail.com","00000",@userId);
   
        COMMIT;';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ':username'=> $username,
    ":pw" => $pw,
    ":gendre" => $gendre,
    ":role" => $role,
    ":ville"=> $ville,
    ":quartier"=> $quartier,
    ":rue"=> $rue,
    ":codePostal"=> $codePostal,
    ":email"=> $email,
    ":tel"=> $tel
   ]);
   $db=null;
   $stmt=null;
}


public function displayUser(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM user');

   $data_users=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_users;
}




public function updateUser($id,$username,$nom, $prenom, $genre,$date_naissance,$nationalite,$password) {
      
    $db = $this->connect();

    if($db == null) {
        return;
    }

    $sql = "UPDATE user SET username = :username, nom = :nom, genre = :genre, date_naissance = :date_naissance, nationalite = :nationalite, WHERE id = :id";

    $stmt = $db->prepare($sql);

    $stmt->execute([
    ':username'=> $username,
    ":nom" => $nom,
    ":prenom" => $prenom,
    ":genre" => $genre,
    ":date_naissance"=> $date_naissance,
    ":nationalite"=> $nationalite,
    ":password"=> $password
       ]);

    $smt = null;
    $db = null;
}

public function deleteUser($id) {
  
    $db = $this->connect();

    if($db == null) {
        return;
    }

    $sql = "DELETE FROM user WHERE id = :id";

    $smt = $db->prepare($sql);

    $smt->execute([
        ":id" => $id
    ]);

    $smt = null;
    $db = null;
}


}







?>