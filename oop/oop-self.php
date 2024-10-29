<?php 
// Self: được sử dụng để gọi phương thức hoặc thuộc  tính tĩnh(static)bên trong lớp.


class Myclass 
{
    public static $name = "Nguyen Cong Anh Tu";
    public static function getName()
    {
        return self::$name;
    }
}

echo MyClass::getName();
?>