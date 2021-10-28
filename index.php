<?php
include_once 'layouts/main.html';
//header


require('Authorisation.php');
if ($isLogged == false)
{
    include_once 'view/NoLogin.html';
}
else
{
    echo ("<h1>Вы вошли в аккауннт</h1>");
}


//footer

include_once 'layouts/footer.php';
?>