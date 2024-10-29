<?php 
    //static được sử dụng để định nghĩa các thuộc tính hoặc phương thức thuộc về lớp thay vì các đối tượng cụ thể của lớp đó

echo "<h1>Ví dụ về sử dụng static</h1>";
class MyClass
{
  public static $count = 0;
  public static function increment(){
    self::$count++;
  }
}
MyClass::increment();
echo MyClass::$count;
?>