<?php
    class Vehicle {
        //Properties
        private $brand;
        private $model;
        private $year;

        function __construct($brand, $model, $year) {
            $this->$brand = $brand;
            $this->$model = $model;
            $this->$year = $year;
        }
    }
?>