<?php
class Comment
{   
    private $replies =[];
    public function __construct(private $content) {}
    public function getContent()
    {
        return $this->content;
    }
    public function addReplies($reply){
        $this->replies[] = $reply;
    }
    public function getReplies(){
        return $this->replies;
    }
}