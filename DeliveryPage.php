<?php
include_once 'layouts/main.php';
//header
?>

<div class="container">
    <h1 class="">Поступления товаров</h1>
    <label for="FormAddProduct">Добавить товар</label>
    <form method="POST" id="FormAddProduct">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="* Название поставщика" name="ProviderName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="* Адрес склада поставщика" name="ProviderStorageName">
        </div>
        <div class="form-group">
            <input type="number" class="form-control"  placeholder="* Артикул или название продукта" name="ProductCode">
        </div>
        <div class="form-group">
            <input type="number" class="form-control"  placeholder="* Количество" name="Count">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="* Цена закупки" name="Price">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="* Цена продажи" name="PriceSell">
        </div>
        <small class="form-text text-muted">Поля, отмеченные * - обязательны для заполнения</small>
        <button type="submit" class="btn btn-primary" style="margin-top:3px" name="AddDelivery">Submit</button>
    </form>
</div>

<?php

include_once("Delivery.php");
//footer
include_once 'layouts/footer.php';
?>