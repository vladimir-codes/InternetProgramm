<?php
include_once 'layouts/main.html';
//header
?>

<div class="container">
    <h1 class="">Авторизация</h1>
    <form method="POST">
        <div class="form-group">
            <label for="InputLogin">Login</label>
            <input type="text" class="form-control" id="InputLogin" placeholder="Enter login" name="login">
            <small class="form-text text-muted">Введите логин указанный при регистрации</small>
        </div>
        <div class="form-group">
            <label for="InputPassword">Password</label>
            <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-top:3px" name="submit">Submit</button>
    </form>
</div>

<?php
    include_once('Authorisation.php');
?>

<?php
//footer
include_once 'layouts/footer.php';
?>