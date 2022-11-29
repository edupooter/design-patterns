<?php

namespace App;

class Dog extends Animal
{
  function __construct() {
    $this->setSound('Bark');
  }

  public function digHole(): void
  {
    echo "Dug a hole";
  }
}
