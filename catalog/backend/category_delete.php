<?php

include('../sql/connection.php');
include('../sql/functions.php');
$id = $_REQUEST["cat_id"];
$where = array('cat_id'=>$id);


$sql = delete("ccc_category",$where);
echo $sql;

if(mysqli_query($conn,$sql))
{
    echo '<script type="text/javascript">alert("Record Deleted")</script>';
    return header("Location: ../frontend/category_list.php");
}
else{ 
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link); 
} 

?>