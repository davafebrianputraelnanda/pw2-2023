<?php

    class Car {
        public $brand;
        public $color;

        function getBrand() {
            return $this->brand;
        }
        function getColor() {
            return $this->color;
        }
    }

    $ft = new Car();
    $ss = new Car();

    $ft->brand = "FT86";
    $ss->brand = "NSX";
    $ft->color = "hitam";
    $ss->color = "hitam";

    echo  $ft->getBrand();
    echo  $ft->getColor();
    echo '<br>';
    echo  $ss->getBrand();
    echo  $ss->getColor();

?>