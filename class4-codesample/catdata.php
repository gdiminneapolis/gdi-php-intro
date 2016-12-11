<?php
class cat {
  public $isCute = true;
  public $furColor;
  public $name;
  public $age;
  public $personality;

  public function __construct($furColor, $name, $age, $personality) {
    $this->furColor = $furColor;
    $this->name = $name;
    $this->age = $age;
    $this->personality = $personality;
  }
}

$cat1 = new cat("Calico", "Caramel", 3, "Sweet");
$cat2 = new cat("Gray", "Smokey", 5, "Shy");
$cat3 = new cat("Orange", "Poppy", 1, "Playful");
$cat4 = new cat("White", "Snowball", 7, "Tough");
?>
