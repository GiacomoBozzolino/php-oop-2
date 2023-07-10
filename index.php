<?php 
  require_once __DIR__."/Models/Product.php";
  require_once __DIR__."/Models/Food.php";

    

    // class Ingredients {
    //     public $ingredients_1;
    //     public $ingredients_2;
    // }
 




    $Dog_Food =new Food ('Royal Canin Mini Adult','Cane', 43.99, '545g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Dog_Food);
?>




