<?php
    if (isset($_POST['AddProduct'])){
        if ($_POST['Name']=="" || $_POST['Category']=="")
        {
            echo("<script>alert('Обязательные поля не заполнены')</script>");    
            return;
        }
        require_once("DataBase.php");
        $db = new DataBase();
        $name = $_POST['Name'];
        $prcode = $_GET['ProductCode'];
        $description = $_POST['Description'];
        $category = $_POST['Category'];
        $imgsrc = $_POST['imgsrc'];

        $check_exist = $db->FetchQuery("SELECT * from `products` WHERE (code='$prcode')");
        if (!$check_exist) {
            $check_exist = $db->Query("INSERT INTO `products`(`code`, `name`, `description`, `category`,`imgsrc`) VALUES ('$prcode','$name','$description','$category','$imgsrc')");
            echo ("<script>alert('Новый товар успешно добавлен')</script>");
            echo ("<script>window.open('DeliveryPage.php','_self',false);</script>");;
            return;
        }
        echo ("<script>alert('Ошибка')</script>");
    }
?>