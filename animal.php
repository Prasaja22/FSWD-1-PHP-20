<?php

    class animal{

        public $nama;
        public $jenis;


        public function __construct($nama, $jenis)
        {
            $this-> nama = $nama;
            $this-> jenis = $jenis;

            echo $this->getInfo();
        }


        public function getInfo(){
           
            return "Nama: ".$this->nama . " Jenis: ".$this->jenis;

        }

    }

    $abel = new animal("Abel", "Dony");

?>