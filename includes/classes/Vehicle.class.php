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

        //Setters
        function setBrand(string $brand) : bool {
            //Kontrollerar att $brand inte är tom
            if($brand !== "") {
                $this->brand = $brand;
                return true;
            }
            return false;
        }

        function setModel(string $model) : bool {
            //Kontrollerar att strängen inte är tom
            if($model !== "") {
                $this->model = $model;
                return true;
            }
            return false;
        }

        function setYear(int $year) : bool {
            //Kontrollerar att det finns ett årtal som är nyare än ett av alternativen för "första riktiga bilen" från wikipedia
            if($year !== 0 && $year > 1873){
                $this->year = $year;
                return true;
            }
            return false;
        }
    }
?>