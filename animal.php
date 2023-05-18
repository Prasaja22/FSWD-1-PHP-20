<?php

    class Animal{

        public $nama;
        public $jenis;


        public function __construct($nama, $jenis)
        {
            $this-> nama = $nama;
            $this-> jenis = $jenis;

            echo $this->getInfo() . "\n";
        }


        public function getInfo(){
           
            return "Hewan ini adalah : ".$this->nama . " Jenis: ".$this->jenis . "<br>" ;

        }

    }


?>