<?php
class post
{
   public $title;
   public $content;

   public function displayinfo(){
    echo ("Tiltle :-  $this->title <br> Content :-  $this->content");
   }
} 
class blog
{
    private $posts=[];
    

    public function addpost(post $post){
        $this->posts[]=$post;
    }
    
    public function displayallposts(){
        foreach($this->posts as $post){
            $post->displayinfo();
            echo "<br> <br>";
        }
    }


}


$post1= new post();
$post1->title="introduction of php";
$post1->content="this is blog post about PHP!!!";

$post2 = new post();
$post2->title="object oriented programming !!!";
$post2->content="overview of oop principals !!!";


$blog= new blog();
$blog->addpost($post1);
$blog->addpost($post2);

$blog->displayallposts();

?>