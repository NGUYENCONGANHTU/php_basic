<?php
 // final có tác dụng ngăn chặn việc ghi đè - kế thừa 
 // parent được sử dụng để gọi phương thức truy cập thuộc tính của lớp cha 
 echo "<h1>Ví dụ về sử dụng parent</h1>";
 class BaseClass {
  public function sayHello(){
    echo "Hello from BaseClass";
  }
 }
 class ChildClass extends BaseClass {
  public function sayHello()
  {
    parent::sayHello(); echo "<br>";
    echo "Hello concak";
  }
 }
 $parent = new ChildClass();

 $parent->sayHello();
?>