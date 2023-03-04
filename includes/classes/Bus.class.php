<?php
    class Bus extends Vehicle {
        //Properties
        private $vehicleType = "buss";
        private $capacity = 50;

        function getBus() : string {
            return "Fordonet är en ". $this->vehicleType . " med en kapacitet på " . $this->capacity . " personer och tillverkas av " . $this->brand . ".";
        }
    }
?>