<?php
class book
{
    public $title;
    public $author;

    public function displayinfo(){
        echo ("Title :- $this->title , Author name :- $this->author");
    }

}

class library{
    private $books = [];

    public function addbook(book $book){
        $this -> books [] = $book;
    }
    public function displayallbook(){
        foreach($this->books as $book){
            $book->displayinfo();
            echo "<br>";
        }
    }
}

    $book1 = new book();
    $book1->title = "The Catcher in the Rye";
    $book1->author = "J.D. Salinger";

    $book2 = new book();
    $book2->title = "To Kill a Mockingbird";
    $book2->author = "Harper Lee";

    $book3 = new book();
    $book3->title ="halls paredice";
    $book3->author="anime";


    $library = new library();
    $library->addbook($book1);
    $library->addbook($book2);

    $library->displayallbook();

    $library= new library();
    $library->addbook($book3);
    $library->displayallbook($book3);
    

?>