<?php 
 echo "<h1>Ví dụ về OOP -đa hình </h1>";
 class Animal{
   public function sound(){
     echo"sound";
   }
 }
 class dog{
   public function sound(){
     echo"Brak";
   }
 }
 class mews{
   public function sound(){
     echo"meomeo";
   }
 }
 
 
 $dog = new dog();
 $dog->sound();
 echo "<br>";
 $mews = new mews();
 $mews->sound();
?>