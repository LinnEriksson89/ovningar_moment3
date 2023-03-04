<?php $pageTitle = "Moment 3";
include_once("includes/header.php");
?>
            <article>
                <h2>Övningar inför moment 3</h2>
                <section>
                    <h3>Test:</h3>
                    <?php
                        $car1 = new Vehicle("Volkswagen", "Golf", 2003);
                        $car2 = new Vehicle("Toyota", "Avensis", 2007);
                        
                        echo "<h4>Testar läsa in två skapade bilar</h4>";
                        echo "<p>" . $car1->getVehicle() ."</p>";
                        echo "<p>" . $car2->getVehicle() ."</p>";
                        echo "<h4>Testar att byta år på bil 1 till 99 och läsa ut den</h4>";
                        $car1->setYear(99);
                        echo "<p>" . $car1->getVehicle() ."</p>";
                        echo "<h4>Testar att byta år på bil 1 till 1999 och läsa ut den</h4>";
                        $car1->setYear(1999);
                        echo "<p>" . $car1->getVehicle() ."</p>";
                        echo "<h4>Testar get-metoderna på bil 2</h4>";
                        echo "<p>Bil två har modell: " . $car2->getModel() . " och är från " . $car2->getYear() . ". Märket är " . $car2->getBrand() . " </p>";

                        echo "<h4>Gentlemen start your engines:</h4>";
                        $car1->accelerate();
                        echo "<p>Den första bilen kör i " . $car1->getSpeed() . " km/h.</p>";
                        $car1->accelerate();
                        echo "<p>Nu kör den i " . $car1->getSpeed() . " km/h.</p>";
                        $car1->accelerate();
                        $car1->accelerate();
                        $car1->setSpeed(37);
                        echo "<p>Nu har vi manuellt satt hastigheten till: " . $car1->getSpeed() . " km/h.</p>";
                        $car1->accelerate();
                        $car1->accelerate();
                        echo "<p>Nu kör den i " . $car1->getSpeed() . " km/h.</p>";
                        $car1->decelerate();
                        echo "<p>Nu kör den i " . $car1->getSpeed() . " km/h.</p>";
                        $car1->decelerate();
                        echo "<p>Nu kör den i " . $car1->getSpeed() . " km/h.</p>";
                        $car1->stop(); 
                        echo "<p>Nu kör den i " . $car1->getSpeed() . " km/h.</p>";


                    ?>
                </section>
                <section>
                </section>
            </article>
<?php include_once("includes/footer.php");?>