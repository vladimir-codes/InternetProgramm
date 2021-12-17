<?php
 include_once 'layouts/main.php';
 require_once("Storage.php");
 ?>

<div class="container mb-lg-0 storagecontent">
    <?php
    PrintTableProduct(getProducts());
    ?>
</div>
<?php
function PrintTableProduct(&$massiv)
{
    if ($massiv) {

        for ($i=0;$i<count($massiv);$i++)              
        {
            echo($i%3==0?"<div class='row'>":null);
            echo ("
            <div class='col-sm-4'>
            <div class='product-item'>
            <img src='".$massiv[$i]['imgsrc']."'>
            <div class='product-list'>
              <h3>".$massiv[$i]['name']."</h3>
                <h3>Категория: ".$massiv[$i]['category']."</h3>
                <h3>Остаток: ".$massiv[$i]['count']."</h3>
                <span class='price'>₽ ".$massiv[$i]['price']."</span>
                <a href='' class='button'>Добавить в чек</a>
            </div>
            </div> 
            </div>                
                ");
            echo(($i+1)%3==0?"</div>":null);

        }

   
    } 
    else echo("Продуктов по такому запросу не найдено");

}



//footer
include_once 'layouts/footer.php';

?>