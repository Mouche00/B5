<?php

    if (isset($_POST['submit'])) {
        $address = $_POST['address'];
        $bank = $_POST['bank'];

        echo $address;
        echo "<br>";
        echo $bank;
    }

?>