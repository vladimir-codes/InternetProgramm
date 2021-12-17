<?php

$login = "";

if (isset($_POST['loginBtn'])) {
    if ($_POST['login']=="" || $_POST["password"]=="") {
        echo ("
            <script>
            alert('Введите данные');
            </script>
        ");
    } else {
        require_once("DataBase.php");
        $db = new DataBase();
        $check_exist = $db->FetchQuery("SELECT * From `logins` WHERE (login='" . $_POST['login'] . "' AND password='" . md5($_POST['password']) . "')");
        if (!$check_exist) {
            echo ("
                <script>
                alert('Логин или пароль введен не правильно');
                </script>
            ");
        } else {
            echo ("
            <script>
            alert('Успешная авторизация');
            </script>
        ");
        }
    }
}
