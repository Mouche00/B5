<?php

    require_once("DataProvider.php");

    class Distributer extends DataProvider {
        
        public function insert($adress, $bankId){
            try {
                $sql = "INSERT INTO atm (adress, bankId) VALUES (:adress, :bankId)";
                $stmt = $this->connect()->prepare($sql); 
                $stmt->bindParam(":adress", $adress);
                $stmt->bindParam(":bankId", $bankId);
                $stmt->execute();
            } catch (PDOException $e){
                die("Error: ". $e->getMessage());
            }
        }

        public function display(){
            try {
                $sql = "SELECT * FROM atm";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute();
            } catch (PDOException $e){
                die("Error: " . $e->getMessage());
            }
        }

        public function update($id, $adress, $bankId){
            try {
                $sql = "UPDATE atm SET adress = :adress, bankId = :bankId WHERE id = :id";
                $stmt = $this->connect()->prepare($sql);
                $stmt->bindParam(":adress", $adress);
                $stmt->bindParam(":bankId", $bankId);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
            } catch (PDOException $e){
                    die("Error: " . $e->getMessage());
                
            }
        }

        public function delete($id){
            try {
                $sql = "DELETE FROM atm WHERE id = :id";
                $stmt = $this->connect()->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->execute();
            } catch (PDOException $e){
                die("Error: " . $e->getMessage());
            }
        }
    }

?>