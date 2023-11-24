<?php

require_once('DataProvider.php');

class user extends DataProvider {
   public function addUser($username,$nom, $prenom, $genre,$date_naissance,$nationalite,$password, $role) {
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO user (username,nom,prenom,genre,date_naissance,nationalite,password) VALUES(:username,:nom,:prenom,:genre,:date_naissance,:nationalite,:password)';
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