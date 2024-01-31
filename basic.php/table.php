<?php

// $severname="localhost";
// $username="root";
// $password="";
// $database="dbsmit1";

// $conn=mysqli_connect($severname,$username,$password,$database); 
// if(!$conn)
// {
// die("sorry connection faild <br>".mysqli_connect_error());
// }
// else
// {
//     echo "connection was successful<br>";
// }

// class player
// {

//     public $name;

//     function set_name($name)
//     {
//         $this->name=$name;
//     }
//     function get_name()
//     {
//         return $this->name;
//     }

   

// }

// $player1= new player();
// $player1->set_name("smit");
// echo $player1->get_name();
// echo "<br>";

// $player2= new player();
// $player2->set_name("yash");
// echo $player2->get_name();
// echo "<br>";

// $player3= new player();
// $player3->set_name("mayank");
// echo $player3->get_name();
// echo "<br>";


class player
{

        public $name;
        public $color;

        function setname($name)
        {
            $this->name=$name;
        }
        function setcolor($color)
        {
            $this->color=$color;
        }

        function getname()
        {
            $this->name ; 
            $this->color;   
        }
       
    }       
    
    
    $player1= new player();
    $player1->setname("smit");
    $player1->setcolor("white");
    $player1->getname();
    echo $player1->name;
    echo $player1->color;

   
?>