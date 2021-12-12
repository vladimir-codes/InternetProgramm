<?php
function Search(){
        if (isset($_GET['search'])) {
            require_once("DataBase.php");
            $db = new DataBase("localhost", "root", "newpassword", "shop");
            $name = $_GET['ProductName'];
            return ($db->Query("Select * from products WHERE name LIKE '%$name%'"));
        }
    }
