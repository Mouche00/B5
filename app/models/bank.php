<?php

require_once('data_provider.php');

class bank extends DataProvider {
   public function addBank($nom, $logo){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO bank (nom,logo) VALUES(:nom,:logo)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":nom" => $nom,
    ":logo" => $logo
   ]);
   $db=null;
   $stmt=null;
}


public function displayBank(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM bank');

   $data_banks=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_banks;
}




public function updateBank($id,$nom, $logo) {
      
    $db = $this->connect();

    if($db == null) {
        return;
    }

    $sql = "UPDATE bank SET nom = :nom, logo = :logo, WHERE id = :id";

    $stmt = $db->prepare($sql);

    $stmt->execute([
    ':nom'=> $nom,
    ":logo" => $logo,
    ":id" => $id
       ]);

    $stmt = null;
    $db = null;
}

public function deleteBank($id) {
  
    $db = $this->connect();

    if($db == null) {
        return;
    }

    $sql = "DELETE FROM bank WHERE id = :id";

    $smt = $db->prepare($sql);

    $smt->execute([
        ":id" => $id
    ]);

    $smt = null;
    $db = null;
}


}




?>