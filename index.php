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
                        
                        echo "<p>" . $car1->getVehicle() ."</p>";
                        echo "<p>" . $car2->getVehicle() ."</p>";
                        $car1->setYear(99);
                        echo "<p>" . $car1->getVehicle() ."</p>";
                        $car1->setYear(1999);
                        echo "<p>" . $car1->getVehicle() ."</p>";
                    ?>
                </section>
                <section>
                </section>
            </article>
<?php include_once("includes/footer.php");?>