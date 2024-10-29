<?php 
echo "<h1>Ví dụ về SET-GET </h1>";

class Person
{
  private $name;
  public function setName($name){
    $this->name = $name;
  }
  public function getName(){
    return $this->name ;
  }
}
$person= new Person();
$person->setName("Tus Ne");
echo $person->getName();
?>