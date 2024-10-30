<?php
class Song
{
    private $comments = [];
    public function __construct(private $title) {}
    public function getTitle(){
        return $this->title;
    }
    public function addComment(Comment $comment){
        $this->comments[] = $comment;
    }
    public function getComments(){
        return $this->comments;
    }

}