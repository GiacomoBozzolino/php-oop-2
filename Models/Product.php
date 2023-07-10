<?php
    // DEFINISCO LA CLASSE GENITORE GENERICA PER TUTTI I PRODOTTI
    class Product {
        public $name;
        public $animal;
        public $price;
        public $img;

        function __construct ($name, $animal, $price){
            $this->name = $name;
            $this->animal = $animal;
            $this->price = $price;
        }

    }


?>