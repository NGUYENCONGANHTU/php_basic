<?php 
echo "<h1>Ví dụ về OOP cơ bản</h1>";
class Car {
  public $brand;
  public $color;

  public function drive(){
    echo "this is my $this->brand";
  }
}
$newCar1 = new Car();
$newCar1->brand = "Huyndai";
$newCar1->color = "red";
$newCar1->drive();
?>