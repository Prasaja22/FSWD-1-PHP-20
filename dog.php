<?php

require_once 'animal.php';

class Dog extends Animal{

    public function __construct($name, $jenis)
    {
        $this->nama = $name;
        $this->jenis = $jenis;
        

    }  
    
    
    public function getInfo(){
           
        return "Hewan ini adalah : ".$this->nama . " Jenis: ".$this->jenis . ". Anjing adalah hewan yang setia dan cerdas." . "<br>" ;

    }


}

?>