<?php

include('../sql/connection.php');
include('../sql/functions.php');

$data = $_POST['product'];
//print_r($data);

$sql = insert("tbl_ccc_product",$data);


if(mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Record Inserted")</script>';
    return header("Location: ../frontend/product_list.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>