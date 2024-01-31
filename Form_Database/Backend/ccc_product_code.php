<?php

include('Connection/ccc_practise_connection.php');
include('functions/sql_function.php');

$data = $_POST['product'];
print_r($data);

$sql = insert("tbl_ccc_product",$data);


if(mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Record Inserted")</script>';
    return header("Location: ../Frontend/display.php");
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>