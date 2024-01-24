<?php

include('Connection/ccc_practise_connection.php');
include('functions/sql_function.php');

$data = $_POST['product'];
print_r($data);
$id = array('pro_id'=>$data["pro_id"]);
print_r($id);
$sql = update("tbl_ccc_product",$data,$id);
echo $sql;
if(mysqli_query($conn, $sql)) 
{
    echo '<script type="text/javascript">alert("Record Updated")</script>';
    return header("Location: ../Frontend/display.php");
}
else 
{
    echo "Error updating record: " . mysqli_error($conn);
}
?>