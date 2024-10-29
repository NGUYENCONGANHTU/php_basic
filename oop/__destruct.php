<?php 
class Myname{
    private $name;
    public function __construct()
    {
        echo "Object create .\n";
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;echo '<pre>';
    }
    public function __destruct()
    {
        echo "Pbject destroyed";
    }
}
echo '<pre>';
$object = new Myname;
$object->setName('Anh Tu dep trai vc');
echo "\n";
echo $object->getName();
?>