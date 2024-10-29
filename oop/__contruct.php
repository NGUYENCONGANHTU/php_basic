<?php
class Myclass{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
        echo $this->name ." handsome";
    }
} 
$name= new Myclass('Anh Tu');
?>
<!-- shorthand  -->
<?php
class Myclassic{
    public function __construct(public $name)
    {
        echo $this->name ." handsome";
    }
} 
$name= new Myclassic('Anh Tu');
?>