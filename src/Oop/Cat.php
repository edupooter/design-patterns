<?php

namespace App;

class Cat extends Animal
{
  function __construct() {
    $this->setSound('Meow');
  }
}