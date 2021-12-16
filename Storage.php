<?php
    Class Storage 
    {
        private $storage =[];
        function GetProducts()
        {
            return $this->storage;
        }
        function SearchProductsInStorage($name,$address)
        {
            require_once("DataBase.php");
            $db = new DataBase("localhost", "root", "newpassword", "shop");
            $this->storage =($db->FetchQuery("Select * from `products` t1 LEFT JOIN `storage` t2 on t2.productCode=t1.code WHERE (t1.name LIKE '%$name%' OR t1.category LIKE '%$name%') AND t2.address='$address'"));
            return $this->storage;
     }
    }
