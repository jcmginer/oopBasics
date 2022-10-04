<?php

    require_once ("CarOne.php");

    $objCarOne = new CarOne ("Gasoline", "4000", "Audi", "RS6", "Black", "Automatic", 8);
    echo $objCarOne->getEngineType();

    $carGarage = new Car ("Gasoline", "4000", "Audi", "RS6", "Black");
    echo $carGarage->getGarage();

?>