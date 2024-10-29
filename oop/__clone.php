<?php
// __clone là một "magic method" được gọi tự động khi bạn thực hiện hành động clone một đối tượng. Khi bạn tạo một bản sao của một đối tượng bằng từ khóa clone, 
// // PHP sẽ gọi phương thức __clone nếu nó được định nghĩa trong lớp của đối tượng đó. Điều này cho phép bạn kiểm soát cách bản sao của đối tượng được khởi tạo.

// public function __clone() {
//     // Xử lý khi đối tượng được sao chép
// }

class MyClass {
    public function __construct(public $name) {}

    public function __clone()
    {
        echo "Object cloned original: " . $this->name . "\n";
    }

    public function __toString()
    {
        return "MyClass Object with name: " . $this->name;
    }
}
echo "<pre>";
$object1 = new MyClass("Anh Tu 1");
echo $object1;
$object2 = clone $object1 ;
echo $object2;
?>