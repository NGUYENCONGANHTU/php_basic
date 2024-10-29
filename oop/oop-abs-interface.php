<?php 
  echo "<h1>Ví dụ về Abstract-Interface </h1>";
  echo "<h2>1.Ví dụ về Abstract</h2>";
  //không tạo trực tiếp , chỉ có tính kế thừa";
abstract class Animall
{
    abstract public function makeSound();
    public function eat(){
      echo"Eating...";
    }
  }
  class Dogg extends Animall{
    public function makeSound()
    {
      echo "Brak";
    }
  }
  $dog = new Dogg();
  echo $dog->makeSound();

?>
<?php 
echo "<h2>2.Ví dụ về Interface</h2>";
//Interface  là một kiểu lớp đặc biệt, không có thân hàm, mà chỉ khai báo phương thức.
//Interface Animal2 chứa phương thức makeSound2().
//Bất kỳ lớp nào thực hiện (implements) interface này sẽ phải định nghĩa phương thức makeSound2().
interface Animal2{
  public function makeSound2();
}
interface Modal{
  public function move();
}
class Meo implements Animal2, Modal{
  public function makeSound2(){
    echo "Back";
  }
  public function move(){
    echo "Meo meo";
  }
}
$meo = new Meo();
$meo->makeSound2();
echo "<br>";
$meo->move();



?>