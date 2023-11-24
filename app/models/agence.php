<?php

require_once('data_provider.php');

class agence extends DataProvider {
   public function addAgence($longitude, $latitude,$adresse){
    $db=$this->connect();
    if($db==null){
        return null;
   }
   $sql= 'INSERT INTO agence (longitude,latitude,adresse) VALUES(:longitude,:latitude,:adresse)';
   $stmt = $db->prepare($sql);
   $stmt->execute([
    ":longitude" => $longitude,
    ":latitude" => $latitude,
    ":adresse" => $adresse
   ]);
   $db=null;
   $stmt=null;
}


public function displayAgence(){

    $db=$this->connect();
    if($db==null){
        return null;
   }

   $query = $db->query('SELECT * FROM agence');

   $data_agence=$query->fetchAll(PDO::FETCH_OBJ);

   $query = null;
   $db=null;
   return $data_agence;
}




public function updateAgence($id,$nom, $logo) {
      
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

public function deleteAgence($id) {
  
    $db = $this->connect();

    if($db == null) {
        return;
    }

    $sql = "DELETE FROM agence WHERE id = :id";

    $smt = $db->prepare($sql);

    $smt->execute([
        ":id" => $id
    ]);

    $smt = null;
    $db = null;
}


}




?>