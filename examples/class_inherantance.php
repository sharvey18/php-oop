<?php

class Cars {

  var $wheels = 4;

  function gretting() {
    echo "hello";
  }

}


$bmw = new cars();

class Trucks extends Cars {

  var $wheels = 10; // overrides default of 4

}

$tacoma = new Trucks();

echo $tacoma->wheels;

 ?>
