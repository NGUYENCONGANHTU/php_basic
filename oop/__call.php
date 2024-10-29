<?php
// __call là một "magic method" (phương thức đặc biệt) được sử dụng khi bạn gọi một phương thức 
// không tồn tại trong lớp hoặc không thể truy cập được (ví dụ: phương thức private từ bên ngoài lớp).

// public function __call($name, $arguments) {
//     // Xử lý logic khi gọi phương thức không tồn tại
// }

class MyClass {
    public function __call($name, $arguments) {
        echo "Phương thức '$name' không tồn tại hoặc không thể truy cập.\n";
        echo "Các tham số: " . implode(", ", $arguments) . "\n";
    }
}

$object = new MyClass();
$object->nonExistentMethod("param1", "param2");
?>