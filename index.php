<?php 
  require_once __DIR__."/Models/Product.php";
  require_once __DIR__."/Models/Food.php";
  require_once __DIR__."/Models/Accessories.php";

    

    // class Ingredients {
    //     public $ingredients_1;
    //     public $ingredients_2;
    // }
 

    $Food_1 =new Food ('Royal Canin Mini Adult','Cane', 43.99, '545g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_1);
    $Food_2 =new Food ('Almo Nature Holistic Maintence','Cane', 44.99, '600g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_2);
    $Food_3 =new Food ('Almo Nature Cat Dayly Lattina','Gatto', 34.99, '400g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_3);
    $Food_4 =new Food ('Mangime per Pesci Guppy in Fiocchi','Pesce', 43.99, '545g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_4);


    $Accessory_1 =new Accessories ('Voliera','Uccello', 43.99, 'legno','L83 X P67 x H153cm');
    var_dump( $Accessory_1);
    $Accessory_1 =new Accessories ('Cartucce per filtro','Pesce', 43.99, 'Materiale espanso ','ND');
    var_dump( $Accessory_1);

?>




