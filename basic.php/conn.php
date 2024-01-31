 <?php
// // connecting database
// $servername="localhost";
// $username="root";
// $password="";

// // creating connection 
// $conn=mysqli_connect($servername,$username,$password);

// if(!$conn){
//     echo ("sorry connection was dia". mysqli_connect_errno());
// }else
// {
// echo "connection was successful";
// }

$servername="localhost";
$username="root";
$password="";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{
    echo ("sorry your connection was not ready".mysqli_connect_error());
}
else
{
    echo "connection was ready";
}
?> 
