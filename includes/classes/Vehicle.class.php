<?php
    class Vehicle {
        //Properties
        private $brand;
        private $model;
        private $year;

        //Konstruktor
        function __construct(string $brand, string $model, int $year) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        //Funktion för att hämta fordon
        function getVehicle() : string {
            return "Tillverkare: " . $this->brand . ", modell: " . $this->model . ", årsmodel: " . $this->year . ".";
        }
    }
?>