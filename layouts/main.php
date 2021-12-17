<?php
session_start();
?>
<html>

<head>
    <title>

    </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">


            <a class="navbar-brand" href="index.php">ГЛАВНАЯ</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collape navbar-collapse" id="navbarContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="btn-group">
                            <button type="button" class="btn bg-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                echo($_SESSION['ShopAddress']?$_SESSION['ShopAddress']:"Выбирете мазазин");
                                ?>
                            </button>
                            <form method="POST">
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" name="ShopAddress" value="Пушкинская 1">Пушкинская 1</button>
                                    <button class="dropdown-item bg-light" name="ShopAddress" value="Кирова 10">Кирова 10</button>
                            </form>
                        </div>
            </div>
            </li>
            <li class="nav-item">
                <a href="StoragePage.php" class="nav-link">Склад</a>
            </li>
            <li class="nav-item">
                <a href="DeliveryPage.php" class="nav-link">Поступления</a>
            </li>
            <li class="nav-item">
                <a href="AuthorisationPage.php" class="nav-link join"><?php echo ($_SESSION['login'] ? $_SESSION['login'] : "Войти") ?></a>
            </li>
            <li class="nav-item">
                <form action="StoragePage.php" class="d-flex searchform" method="GET">
                    <input class="form-control me-2" type="textarea" placeholder="Введите название товара" aria-label="Search" name="ProductName">
                    <button class="btn btn-outline success bg-light" name="search">Поиск</button>
                </form>
            </li>

            </ul>
        </div>
        </div>
    </nav>
    <?php
    if ($_POST['ShopAddress']) $_SESSION['ShopAddress'] = $_POST['ShopAddress'];
    ?>