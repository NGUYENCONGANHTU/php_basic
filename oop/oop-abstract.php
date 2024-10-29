<?php 
echo "<h1>Ví dụ về OOP - trừu tượng </h1>";

abstract class Shape{
  abstract protected function getArea();
}
class Rectangle  extends Shape{
  private $dai;
  private $rong;

  public function __construct($dai, $rong){
    $this->dai = $dai;
    $this->rong = $rong;
  }
  public function getArea(){
    return $this->dai * $this->rong;
  }
}

$kickco = new Rectangle(2, 3);
echo "Diện tích hình chữ nhật là: " . $kickco->getArea();echo "<br>";



class Circle extends Shape{
  private $radius;
  public function __construct($radius)
  {
    $this->radius = $radius;
  }
  public function getArea()
  {
    return pi() * pow($this->radius,2);
  }
}
$dientichhinhtron = new Circle(3);

echo "Diện tích hình tròn là: " . $dientichhinhtron->getArea();
?>