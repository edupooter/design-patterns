<?php

namespace App;

class Animal
{
  private string $name;
  private float $weight;
  private string $sound;

  public function setName(string $newName = ''): void
  {
    $this->name = $newName;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setWeight(float $newWeight = null): void
  {
    if ($newWeight > 0.0) {
      $this->weight = $newWeight;
    } else {
      echo "Weight must be greater than zero\n";
    }
  }

  public function getWeight(): float
  {
    return $this->weight;
  }

  public function setSound(string $newSound = ''): void
  {
    $this->sound = $newSound;
  }

  public function getSound(): string
  {
    return $this->sound;
  }
}

class Dog extends Animal
{
  function __construct() {
    $this->setSound('Bark');
  }

  public function digHole(): void
  {
    echo "Dug a hole\n";
  }

  public function changeVar(int $randNum): void
  {
    $randNum = 12;

    echo "Random number in method: {$randNum}\n";
  }
}

class Cat extends Animal
{
  function __construct() {
    $this->setSound('Meow');
  }
}

$fido = new Dog();

$fido->setName('Fido');

echo $fido->getName()."\n";

$fido->digHole();

$fido->setWeight(1);

$randNum = 10;

$fido->changeVar($randNum);

echo "Random number after method: {$randNum}\n";
