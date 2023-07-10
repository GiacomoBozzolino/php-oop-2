<?php 
  require_once __DIR__."/Models/Product.php";
  require_once __DIR__."/Models/Food.php";
  require_once __DIR__."/Models/Accessories.php";
  require_once __DIR__."/Models/Toys.php";
  require_once __DIR__."/Models/Dimensions.php";

    
  
 

    $food_1 =new Food ('Royal Canin Mini Adult',' <i class="fa-solid fa-dog"></i> Cane', 43.99, '545g',['prosciutto ', ' riso ']);
    $food_1->img ='https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';
    
    $food_2 =new Food ('Almo Nature Holistic Maintence','<i class="fa-solid fa-dog"></i> Cane', 44.99, '600g',['manzo ', 'cereali']);
    $food_2->img ='https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg';
    
    $food_3 =new Food ('Almo Nature Cat Dayly Lattina','<i class="fa-solid fa-cat"></i> Gatto', 34.99, '400g',['tonno', 'pollo', 'prosciutto']);
    $food_3->img ='https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg';

    $food_4 =new Food ('Mangime per Pesci Guppy in Fiocchi','<i class="fa-solid fa-fish"></i> Pesce', 2.65, '30g',['pesci e sottoprodotti dei pesci', 'cereali', 'lieviti', 'alghe']);
    $food_4->img ='https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg';
 

    $accessory_1 =new Accessories ('Voliera','<i class="fa-solid fa-crow"></i> Uccello', 184.99, 'Legno',new Dimensions('L83 X P67 x H153cm'));
    $accessory_1->img ='https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg';
   
    $accessory_2 =new Accessories ('Cartucce per filtro','<i class="fa-solid fa-fish"></i> Pesce', 2.29, 'Materiale espanso ', new Dimensions('ND'));
    $accessory_2->img ='https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg';
    
    $toy_1 =new Toys ('Kong Classic',' <i class="fa-solid fa-dog"></i> Cane', 13.49, 'Galleggia e rimbalza ', new Dimensions ('8.5cm x 10 cm'));
    $toy_1->img ='https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg';
    
    $toy_2 =new Toys ('Topini di peluche','<i class="fa-solid fa-cat"></i> Gatto', 4.99, 'Morbido con codina in corda',new Dimensions('8.5cm x 10 cm'));
    $toy_2->img ='https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg';
    
    $foodArray = [
        $food_1,
        $food_2,
        $food_3,
        $food_4,
       
    ];

    $accessoryArray = [
        $accessory_1,
        $accessory_2
    ];


    $toysArray = [
        $toy_1,
        $toy_2
    ];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> OOP store</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12 text-end">
                        <h1 class="pt-4"> OPP STORE</h1>
                    </div>
                </div>
            </div>
        </header>
       <main>
           <div class="container">
               <div class="row">
                <!-- CICLO ALIMENTI ANIMALI -->
                    <?php foreach ( $foodArray as $food) { ?>
                        <div class="col-4  ">
                            <div class= "card m-2 ">
                                    <div class= "text-center">
                                        <img src=<?php echo $food->img?> alt="<?php echo $food->name ?>">
                                    </div>
                                <ul >
                                    <li>
                                        <h5  >
                                            <?php echo $food->name ?>
                                        </h5>
                                    </li> 
                                    <li >
                                        <div  >
                                            <?php echo $food->animal;?>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                            Prezzo:
                                        </div>
                                        <div>
                                            <?php echo $food->price ?> &euro;
                                        </div> 
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">

                                        <div class="pe-2">
                                            Peso:
                                        </div>
                                        <div>
                                            <div class="px-2">
                                                <?php echo $food->weight;?>
                                            </div>
                                    </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                           Ingredienti:
                                        </div>
                                        <?php  foreach ($food->ingredients as $ingredients) {?>
                                        <span>
                                            <?php echo $ingredients ?>,  
                                        </span> 
                                        <?php } ?>
                                    </li>
                                    
                                </ul>
                            </div>      
                        </div>
                    <?php } ?>
                    <!-- FINE CICLO ALIMENTI ANIMALI -->
                    <!-- CICLO ACCESSORI ANIMALI -->
                    <?php foreach ( $accessoryArray as $item) { ?>
                        <div class="col-4 ">
                            <div class= "card m-2">
                                    <div class= "text-center">
                                        <img src=<?php echo $item->img?> alt="<?php echo $item->name ?>">
                                    </div>
                                <ul >
                                    <li>
                                        <h5>
                                            <?php echo $item->name ?>
                                        </h5>
                                    </li> 
                                    <li >
                                        <div>
                                            <?php echo $item->animal;?>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                            Prezzo:
                                        </div>
                                        <div>
                                            <?php echo $item->price ?> &euro;
                                        </div> 
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">

                                        <div class="pe-2">
                                            Materiali:
                                        </div>
                                        <div>
                                            <div class="px-2">
                                                <?php echo $item->materials;?>
                                            </div>
                                    </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                           Dimensioni:
                                        </div>
                                        <span>
                                            <?php echo $item->dimensions->dimensions ?>
                                        </span> 
                                    </li> 
                                </ul>
                            </div>      
                        </div>
                    <?php } ?>
                    <!-- FINE CICLO ACCESORI ANIMALI -->
                    <!-- CICLO GIOCATTOLI ANIMALI -->
                    <?php foreach ( $toysArray as $item) { ?>
                        <div class="col-4 ">
                            <div class= "card m-2 ">
                                    <div class= "text-center">
                                        <img src=<?php echo $item->img?> alt="<?php echo $item->name ?>">
                                    </div>
                                <ul >
                                    <li>
                                        <h5>
                                            <?php echo $item->name ?>
                                        </h5>
                                    </li> 
                                    <li >
                                        <div>
                                            <?php echo $item->animal;?>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                            Prezzo:
                                        </div>
                                        <div>
                                            <?php echo $item->price ?> &euro;
                                        </div> 
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">

                                        <div class="pe-2">
                                            Caratteristiche:
                                        </div>
                                        <div>
                                            <div>
                                                <?php echo $item->feature;?>
                                            </div>
                                    </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="pe-2">
                                           Dimensioni:
                                        </div>
                                        <span>
                                            <?php echo $item->dimensions->dimensions ?>
                                        </span> 
                                    </li> 
                                </ul>
                            </div>      
                        </div>
                    <?php } ?>

                </div>
           </div> 
       </main>
    </body>
</html>


