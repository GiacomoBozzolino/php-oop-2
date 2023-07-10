<?php
    class Food extends Product {
        public $weight;
        public $ingredients;

        public function __construct ($name, $animal, $pice,$weight ,$ingredients){
            parent::__construct ($name, $animal, $pice);
            $this->weight = $weight;
            $this->ingredients = $ingredients;
        }

    }

?>