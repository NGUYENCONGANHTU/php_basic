<?php
 class Category{
    private $songs=[];
    public function __construct(private $name)
    {
        
    }
    public function getName(){
        return $this->name;
    }
    public function addSong(Song $song){
        $this->songs[]= $song;
    }
    public function getSongs(){
        return $this->songs;
    }
 }
?>