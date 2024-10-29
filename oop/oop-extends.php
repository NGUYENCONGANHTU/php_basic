<?php 
echo "<h1>Ví dụ về OOP - tính kế thừa </h1>";
class Vehicle {
 public $brand;
 public function honk(){
   echo "Hooking";
 }
}
class Motor extends Vehicle{
 public $models;
 public function drive(){
   echo "Hooking $this->brand $this->models";
}
}
$newCar2 = new Motor();
$newCar2->brand = "Huyndai";
$newCar2->models = "fix";
$newCar2->drive();
?>