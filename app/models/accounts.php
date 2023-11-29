<?php

    require_once('DataProvider.php');
    // class Accounts 

    class Accounts extends DataProvider {
        
        // ADD Accounts to Clients
        public function addAccount($balance , $rib , $userID) {
            $db_connection = $this->connect();
            if ($db_connection == null) {
                return null;
            }

            $sql = "INSERT INTO account (balance , RIB , userID)
                VALUES (:balance , :rib , :userID)
            ";
            $stmt = $db_connection->prepare($sql);
            $stmt->bindParam(':balance' ,$balance,PDO::PARAM_STR);
            $stmt->bindParam(':rib' ,$rib,PDO::PARAM_STR);
            $stmt->bindParam(':userID' ,$userID,PDO::PARAM_INT);

           try{
             $stmt->execute();
           }
           catch(PDOException $e){
               die("invalid query" . $e->getMessage());
           }

            $db_connection = null;
            $stmt = null;

        }
        
        public function displayAccounts() {

            $db_connection = $this->connect();
            if ($db_connection == null) {
                return null;
            }
            $sql = "SELECT * FROM account";

            $stmt = $db_connection->query($sql);

            $accounts = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $accounts;

        }

        public function displayAccount($accountID) {
            
            $db_connection = $this->connect();
            if ($db_connection == null) {
                return null;
            }
            $sql = "SELECT * FROM account WHERE accountId = $accountID";

            $stmt = $db_connection->query($sql);

            $account = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $account;


        }

        public function deleteAccount($accountID) {

            $db_connection = $this->connect();

            if ($db_connection == null) {
                return null;
            }

            $sql = "DELETE FROM account WHERE accountId = $accountID";

            $stmt = $db_connection->prepare($sql);

            if ($stmt->execute()) {
                echo "Deleted";
            }

            $db_connection = null;
            $stmt = null;

        }


        public function updateAccount($balance , $rib ,$accountID) {
            $db_connection = $this->connect();
            if ($db_connection == null) {
                return null;
            }
            
            $sql = "UPDATE account SET balance = :balance , RIB = :rib WHERE accountId = $accountID";

            $stmt = $db_connection->prepare($sql);


            $stmt->execute([
                ":balance"=> $balance,
                ":rib"=> $rib,

            ]);

            $db_connection = null;
            $stmt = null;

        }










    }














?>