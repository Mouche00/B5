<?php

    require_once("../../models/bank.php");

    if (isset($_POST['submit'])) {
        $bank = new bank();
        $name = $_POST['name'];

        if ($_POST['mode'] == "edit") {
            $id = $_POST["id"];
            $bank->updateBank($id, $name);
        } else {
            $bank->addBank($name);
        }


        var_dump($_POST['mode']);
        echo "hello";

        header('Location: ../../views/admin/Bank.php');
    }

    if (isset($_GET['bankId'])) {
        $id = $_GET['bankId'];
        $bank = new bank();
        $bank->deleteBank($id);
        header('Location: ../../views/admin/Bank.php');
    }

    $bank = new bank();

    $banks = $bank->displayBank();


?>