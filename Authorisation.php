<?php
$isLogged = false;

if(isset($_POST['submit']))
{
        $link=mysqli_connect("localhost", "root", "root", "internetprogram");

        // Вытаскиваем из БД запись, у которой логин равняеться введенному
        $query = mysqli_query($link,"SELECT login, password FROM logins WHERE login='".mysqli_real_escape_string($link,$_POST['login'])."' LIMIT 1");
        $data = mysqli_fetch_assoc($query);
        // Сравниваем пароли
        if($data['password'] == $_POST['password'] & $data!=null)
        {
            $isLogged = true;
            print "Вы ввели  логин/пароль";
            return true;
        }
        else
        {
            $isLogged = false;
            print "Вы ввели неправильный логин/пароль";
            return false;
        }

}
