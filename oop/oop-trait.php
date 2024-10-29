<?php 
//Trait cho phép chúng ta tái sử dụng các phương thức trong nhiều lớp mà không cần phải kế thừa.
//Trait là môt nhóm phương thức và thuộc tính. Một lớp có thể sử dụng nhiều traite
echo "<h1>Ví dụ về sử dụng trait</h1>";

trait Logger
{
  public function log($message){
    echo "Logging message: $message";
  }
}
trait FileUploader
{
  public function upload($file){
    echo "Logging message: $file";
  }
}
class User{
  use Logger, FileUploader;
  public function createUser(){
    $this->log('User yamate cudasai');
    echo "<br>";
    $this->upload('đasadsadsads yamate cudasai');
  }
}
$user = new User();
echo "<br>";
$user->createUser();
?>