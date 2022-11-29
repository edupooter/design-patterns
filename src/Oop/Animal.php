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
      echo "Weight must be greater than zero";
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
