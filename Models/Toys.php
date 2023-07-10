<?php
    class Toys extends Product {
        public $feature;
        public $dimensions;
        
    
        public function __construct ($name, $animal, $pice, $feature ,$dimensions){
            parent::__construct ($name, $animal, $pice);
            $this->feature = $feature;
            $this->dimensions = $dimensions;
        }
    
    }

?>