<?php
    require_once 'class_kasus.php';

    $AC = new AC("AC", "Panasonic", 4);
    $Handphone = new Handphone("Handphone", "Poco", 10);

    echo "Info AC:<br>";
    $AC->getInfo();
    echo "<br>";

    echo "Handphone:<br>";
    $Handphone->getInfo();
?>