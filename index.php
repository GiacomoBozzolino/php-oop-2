<?php 
  require_once __DIR__."/Models/Product.php";
  require_once __DIR__."/Models/Food.php";
  require_once __DIR__."/Models/Accessories.php";
  require_once __DIR__."/Models/Toys.php";
  require_once __DIR__."/Models/Dimensions.php";

    
  
 

    $Food_1 =new Food ('Royal Canin Mini Adult','Cane', 43.99, '545g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_1);
    $Food_2 =new Food ('Almo Nature Holistic Maintence','Cane', 44.99, '600g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_2);
    $Food_3 =new Food ('Almo Nature Cat Dayly Lattina','Gatto', 34.99, '400g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_3);
    $Food_4 =new Food ('Mangime per Pesci Guppy in Fiocchi','Pesce', 43.99, '545g',['ingrdiente 1', 'ingrediente 2']);
    var_dump($Food_4);


    $Accessory_1 =new Accessories ('Voliera','Uccello', 43.99, 'legno',new Dimensions('L83 X P67 x H153cm'));
    var_dump( $Accessory_1);
    $Accessory_1 =new Accessories ('Cartucce per filtro','Pesce', 43.99, 'Materiale espanso ', new Dimensions('ND'));
    var_dump( $Accessory_1);


    $Toy_1 =new Toys ('Kong Classic','Cane', 43.99, 'Galleggia e rimbalza ', new Dimensions ('8.5cm x 10 cm'));
    var_dump( $Toy_1);

    $Toy_2 =new Toys ('Topini di peluche','Gatto', 43.99, 'Morbido con codina in corda ',new Dimensions('8.5cm x 10 cm'));
    var_dump( $Toy_2);


?>




