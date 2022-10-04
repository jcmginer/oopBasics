<?php

    require_once ("baseClass.php");

    class CarOne extends Car{

        protected $strGeraboxType;
        protected $intNumOfGears;
        public static $strPlate = "RS6AND";


        function __construct(string $strFuelType, int $intDisplacement,string $brand, string $model, string $color, string $strGearboxType, int $intNumOfGears){

            parent::__construct($strFuelType, $intDisplacement, $brand, $model, $color);

            $this->strGearboxType = $strGearboxType;
            $this->intNumOfGears = $intNumOfGears;
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
                Gearbox Type: {$this->strGearboxType}<br>
                Num of Gears: {$this->intNumOfGears}<br>
                Plate:". self::$strPlate;
            return $features;
        }

        public function getGarage()
        {
            $carsGarage = "
            <h2>Cars in the garage</h2>
            First car: {$this->strBrand}.' '.{$this->strModel}.'.'
            ";
            return $carsGarage;
        }

        public function getGearboxType():string
        {
            return $this->strGearboxType;
        }

        public function getNumOfGears()
        {
            return $this->intNumOfGears;
        }

        public function getPlate():string
        {
            return $this->strPlate;
        }

        function __destruct()
        {
            
        }


    }

?>