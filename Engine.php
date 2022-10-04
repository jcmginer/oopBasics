<?php

    abstract class Engine{

        public $strFuelType;
        public $intDisplacement;

        function __construct(string $strFuelType, int $intDisplacement)
        {
            $this->strFuelType = $strFuelType;
            $this->intDisplacement = $intDisplacement;
        }


        abstract public function getEngineType();
        abstract public function getGarage();




    }

?>