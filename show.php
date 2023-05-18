<?php

    require_once 'dog.php';
    require_once 'cat.php';

    $animal = new Animal("Tiger","Karnivora");

    $dog = new Dog("Lala","Lali");
    echo $dog->getInfo();

    $cat = new Cat("Popo","Popol");
    echo $cat->getInfo();

?>