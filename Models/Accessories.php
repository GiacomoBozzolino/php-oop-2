<?php

class Accessories extends Product {
    public $materials;
    public $dimensions;
    

    public function __construct ($name, $animal, $pice, $materials ,$dimensions){
        parent::__construct ($name, $animal, $pice);
        $this->materials = $materials;
        $this->dimensions = $dimensions;
    }

}



?>