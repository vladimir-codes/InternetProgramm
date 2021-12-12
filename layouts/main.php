<html>

<head>
    <title>

    </title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
                    <!-- <li class="nav-item">
                         Bootstrap 4
            <div class="btn-group">
                Кнопка 
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Магазины
                </button> 
                         Меню 
                        <div class="dropdown-menu"
                    <a class="dropdown-item" href="#">Действие 1</a>
                    <a class="dropdown-item" href="#">Действие 2</a>
                    <a class="dropdown-item" href="#">Действие 3</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Действие 4</a>
                </div>
            </div> -->
                    <!-- </li> -->
                    <li class="nav-item">
                        <a href="StoragePage.php" class="nav-link">Склад</a>
                    </li>
                    <li class="nav-item">
                        <a href="DeliveryPage.php" class="nav-link">Поступления</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link join">Войти</a>
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
    require_once("SearchProduct.php");
    $massiv = Search();
    ?>