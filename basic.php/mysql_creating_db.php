<?php

$severname="localhost";
$username="root";
$password="";
$database="dbsmit1";

$conn=mysqli_connect($severname,$username,$password,$database);
if(!$conn)
{
die("sorry connection faild <br>".mysqli_connect_error());
}
else
{
    echo "connection was successful<br>";
}


?>