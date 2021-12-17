<?php
    function getProducts(){
    if (isset($_POST['ShopAddress'])){
            require_once("DataBase.php");
            $db = new DataBase();
            $name = $_GET['ProductName'];
            $address = $_POST['ShopAddress'];
            return($db->FetchQuery("Select * from `products` t1 LEFT JOIN `storage` t2 on t2.productCode=t1.code WHERE (t1.name LIKE '%$name%' OR t1.category LIKE '%$name%') AND t2.address='$address'"));          
    }
    else
    {
        echo("Пожалуйста, выберете магазин ");
    }
}

