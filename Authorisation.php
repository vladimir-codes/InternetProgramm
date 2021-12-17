<?php

    $login = "";

    if (isset($_POST['submit'])) {
        require_once("DataBase.php");
        $db = new DataBase();
        echo("<pre>");
        print_r( $db->Query("Select * from products"));
        echo("</pre>");
    }

