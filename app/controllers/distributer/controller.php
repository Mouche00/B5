<?php

    require_once("../../models/distributer.php");

    if (isset($_POST['submit'])) {
        $address = $_POST['address'];
        $bank = $_POST['bank'];

        $distributer = new Distributer();

        $distributer->insert($address, $bank);
    }

?>