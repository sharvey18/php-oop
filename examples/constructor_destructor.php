<?php

class Cars {

  public $wheel_count = 4;

  static $door_count = 4;

  function __construct() { // or destruct // hardly used

    echo $this->wheel_count;

    echo self::$door_count++;

  }

}


$bmw = new cars();

$benz = new cars();

$tesla = new cars();

 ?>
