<?php

    require_once ("Engine.php");

    class Car extends Engine{

        public $strBrand;
        public $strModel;
        public $strColor = "White";

        function __construct(string $strFuelType, int $intDisplacement, string $brand, string $model, string $color)
        {
            parent::__construct($strFuelType, $intDisplacement);

            $this->strBrand = $brand;
            $this->strModel = $model;
            $this->strColor = $color;
        }

        public function getBrand():string
        {
            return $this->strBrand;
        }

        public function getModel():string
        {
            return $this->strModel;
        }

        public function getEngineType()
        {
            $features ="
                <h2>Car</h2>
                Brand: {$this->strBrand}<br>
                Model: {$this->strModel}<br>
                Color: {$this->strColor}<br>
                Fuel Type: {$this->strFuelType}<br>
                Displacement: {$this->intDisplacement}<br>
            ";
            return $features;
        }

        public function getGarage()
        {
            $carsGarage = "
            <h2>Cars in the garage</h2>
            First car: {$this->strBrand} {$this->strModel}.
            ";
            return $carsGarage;
        }

        function __destruct()
        {

        }


    }

    //$carGarage = new Car ("Gasoline", "4000", "Audi", "RS6", "Black");

?>