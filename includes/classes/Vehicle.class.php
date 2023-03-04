<?php
    class Vehicle {
        //Properties
        protected $brand;
        private $model;
        private $year;
        private $speed = 0;

        //Konstruktor
        function __construct(string $brand, string $model, int $year) {
            $this->brand = $brand;
            $this->model = $model;
            $this->year = $year;
        }

        //Funktion för att hämta fordon
        function getVehicle() : string {
            return "Tillverkare: $this->brand, modell: $this->model, årsmodel: $this->year.";
        }

        //Hastighetsfunktioner
        function accelerate() : int {
            $this->speed = $this->speed+10;
            return $this->speed;

        }

        function decelerate() : int {
            $this->speed = $this->speed-10;
            return $this->speed;
        }

        function stop() : int{
            $this->speed = $this->speed+10;
            return $this->speed;

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

        function setSpeed(int $speed) : bool {
            $this->speed = $speed;
            return true;
        }

        //Getters
        function getBrand() : string {
            return $this->brand;
        }

        function getModel() : string {
            return $this->model;
        }
        
        function getYear() : int {
            return $this->year;
        }

        function getSpeed() : int {
            return $this->speed;
        }
    }
?>