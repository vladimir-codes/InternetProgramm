<?php
if (isset($_POST['AddDelivery'])) {
    if ($_POST['ProductCode'] == "" || $_POST['Count'] == "" || $_POST['Count'] == "" || $_POST['Price'] == "" || $_POST['ProviderName'] == "" || $_POST['ProviderStorageName'] == "") {
        echo ("<script>alert('Обязательные поля не заполнены')</script>");
        return;
    }
    if (isset($_SESSION['ShopAddress'])) {

        require_once("DataBase.php");
        $db = new DataBase();
        $address = $_SESSION['ShopAddress'];
        $prcode = $_POST['ProductCode'];
        $count = $_POST['Count'];
        $price = $_POST['Price'];
        $pricesell = $_POST['PriceSell'];
        $ProviderName = $_POST['ProviderName'];
        $ProviderStorageName = $_POST['ProviderStorageName'];
        $check_exist = $db->FetchQuery("SELECT * from `products` WHERE (code='$prcode')");
        if (!$check_exist) {
            echo ('
                <script>    
                let result = confirm("Похоже, что в базе данных нет товара с таким артикулом, хотите добавить данный товар в базу данных товаров?")
                if(result) {
                    window.open("AddProductPage.php?ProductCode=' . $prcode . '","_self",false);
                }
                else{
                    window.open("DeliveryPage.php","_self",false)
                }
                </script>
                ');
        } else {
            $check_exist = $db->FetchQuery("SELECT `productCode` from `storage` WHERE (productCode='$prcode')");
            if (!$check_exist) {
                $db->Query("INSERT INTO `storage` (`address`,`productCode`,`count`,`price`) VALUES ('$address','$prcode','$count','$pricesell')");
            } else {
                $count += $db->FetchQuery("SELECT count FROM `storage` WHERE (`address`='$address' AND `ProductCode`='$prcode')")[0]['count'];
                $db->Query("UPDATE `storage` SET `count`= '$count' , `price`='$pricesell' WHERE (`address`='$address' AND `ProductCode`='$prcode')");
            }
            $db->Query("INSERT INTO `delivery`(`storeAddress`, `productProvider`, `providerStorageAddress`, `productCode`, `count`, `price`) VALUES ('$address','$ProviderName','$ProviderStorageName','$prcode','$count','$price')");
            echo ("<script>alert('Поставка товара успешно добавлен')</script>");
        }
    }
    else
    {
        echo ("
        <script>
        alert('Пожалуйста, выберите магазин');
        </script>
        ");
    }
}
