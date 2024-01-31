<?php

include('Connection/ccc_practise_connection.php');
include('functions/sql_function.php');
$id = $_REQUEST["pro_id"];
$where = array('pro_id'=>$id);


$sql = delete("tbl_ccc_product",$where);
echo $sql;

if(mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Record Deleted")</script>';
    return header("Location: ../Frontend/display.php");
}
else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 

?>