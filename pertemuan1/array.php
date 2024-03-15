<?php

    // $fruits = ["Mangga", "Kecapi", "Lengkeng"];
    
    // foreach ($fruits as $fruit) {
    //     echo $fruit;
    //     echo '<br>';
    // }

    // $dinos = [
    //     "dinoNAme" => "Tricera",
    //     "dinoAge" => 300,
    //     "isMarried" => "false"

    // ];

    // foreach ($dinos as $dino) {
    //     echo $dino;
    //     echo '<br>';
    // }

    $dinos = [
        [
            "dinoName" => "Tricera",
            "dinoAge" => 300
        ],
        [
            "dinoName" => "Rex",
            "dinoAge" => 500
        ],
        [
            "dinoNauighme" => "Ptera",
            "dinoAge" => 250
        ],
    ];

    foreach ($dinos as $dino) {
        echo $dino["dinoName"] . " - " .$dino["dinoAge"] . " Tahun";
        echo '<br>';
    }

?>