<?php 
require_once "./User.php";
require_once "./Category.php";
require_once "./Song.php";
require_once "./Comment.php";


//lấy tên người dùng 
$user = new User("Nguyễn Công Anh Tú");
echo "Thông tin người dùng " .$user->getName();
// Category
echo "<br>";
echo "Danh mục bài hát";
echo "<br>";
//Tạo danh mục 
$category1 = new Category("Nhạc KPOP");
//tạo bài hát
$song1 = new Song("Song 1");
$song2 = new Song("Song 2");
// add các bài hát này vào trong danh mục Nhạc KPOP
$category1->addSong($song1);
$category1->addSong($song2);

//Comment Content 1
$comment1= new Comment("Nội dung 1");
$reply1 = new Comment("Phản hồi nội dung 1");
//Add Comment 1
$song1->addComment($comment1);
$comment1->addReplies($reply1);

//Comment Content 2
$comment2= new Comment("Nội dung 2");
$reply2 = new Comment("Phản hồi nội dung 2");
//Add Comment 2
$song2->addComment($comment2);
$comment2->addReplies($reply2);
echo"<pre>";
echo $category1->getName();

echo "<pre>";
foreach($category1->getSongs() as $song){
    echo "- " .$song->getTitle() ."\n";
    foreach($song->getComments() as $comment){
    echo "   - " .$comment->getContent() ."\n";
    foreach($comment->getReplies() as $reply){
        echo "     - " .$reply->getContent() ."\n";
    }
    }
}




?>