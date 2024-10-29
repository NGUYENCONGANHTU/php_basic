<?php 
//được sử dụng để định nghĩa các hàng số(constants) trong lớp và giá trị của chúng không hề thay đổi.
// đã sử dụng const thì bắt buộc phải self để lấy giá trị của const
class MyClass{
    const pi = 3.14159;
    public function getPi(){
       return self::pi; 
    }
}

$myClass = new MyClass();
echo $myClass->getPI();
?>