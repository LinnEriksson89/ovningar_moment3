<?php
    //Webbplatstitel
    $siteTitle = "Webbutveckling II";
    $divider = " - ";

    // Aktivera felrapportering
    error_reporting(-1);
    ini_set("display_errors", 1);
    
    //Auto-inkludera klasser
    spl_autoload_register(function($class_name) {
        include("includes/classes/" . $class_name . ".class.php");
    });
?>