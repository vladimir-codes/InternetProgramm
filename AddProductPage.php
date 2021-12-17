<?php
include_once 'layouts/main.php';
//header
?>

<div class="container">
    <h1 class="">Добавление нового товара</h1>
    <label for="FormAddNewProduct">Добавить товар</label>
    <form method="POST" id="FormAddNewProduct">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="* Название" name="Name">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder=" Описание" name="Description">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder="* Категория" name="Category">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  placeholder=" Ссылка на фото" name="imgsrc">
        </div>
        <small class="form-text text-muted">Поля, отмеченные * - обязательны для заполнения</small>
        <button type="submit" class="btn btn-primary" style="margin-top:3px" name="AddProduct">Submit</button>
    </form>
</div>

<?php
include_once("AddProduct.php");
//footer
include_once 'layouts/footer.php';
?>