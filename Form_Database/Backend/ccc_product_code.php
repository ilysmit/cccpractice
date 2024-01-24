<?php

include('Connection/ccc_practise_connection.php');
include('functions/sql_function.php');

$data=$_POST['product'];
 print_r($data);

 $sql =insert("tbl_ccc_product",$data);
 echo $sql;

if(mysqli_query($conn,$sql)){

    echo '<script type="text/javascript">alert("Record Inserted")</script>';

 }
 else{
    echo "Error: " . $sql . "<br>" . $conn->error;
 }
// $data = $_REQUEST;
// //echo $data;
// print_r($data);
// $pro_name = $_REQUEST['pro_name'];
// $pro_sku = $_REQUEST['pro_sku'];
// $pro_type = $_REQUEST['pro_type'];
// $pro_cat = $_REQUEST['pro_cat'];
// $pro_cp = $_REQUEST['pro_cp'];
// $pro_sp = $_REQUEST['pro_sp'];
// $pro_tp = $_REQUEST['pro_tp'];
// $pro_price = $_REQUEST['pro_price'];
// $pro_status = $_REQUEST['pro_status'];
// $pro_create = $_REQUEST['pro_create'];
// $pro_update = $_REQUEST['pro_update'];


// $sql = "INSERT INTO `tbl_ccc_product`(`pro_name`, `pro_sku`, `pro_type`, `pro_category`, `pro_cp`, `pro_sp`, `pro_tp`, `pro_price`, `pro_status`, `pro_create`, `pro_update`) VALUES ('$pro_name',$pro_sku,'$pro_type','$pro_cat',$pro_cp,$pro_sp,$pro_tp,$pro_price,'$pro_status','$pro_create','$pro_update')";
//     if (mysqli_query($conn,$sql)) 
//     {
//         echo '<script type="text/javascript">alert("Record Inserted")</script>';
//     } 
//     else 
//     {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     mysqli_close($conn);
    
// /*
// function pro_insert($pro_name,$pro_sku,$pro_type,$pro_cat,$pro_cp,$pro_sp,$pro_tp,$pro_price,$pro_status,$pro_create,$pro_update)
// {
//     $sql = "INSERT INTO `tbl_ccc_product`(`pro_name`, `pro_sku`, `pro_type`, `pro_category`, `pro_cp`, `pro_sp`, `pro_tp`, `pro_price`, `pro_status`, `pro_create`, `pro_update`) VALUES ('$pro_name',$pro_sku,'$pro_type','$pro_cat',$pro_cp,$pro_sp,$pro_tp,$pro_price,'$pro_status','$pro_create','$pro_update')";
//     if (mysqli_query($conn,$sql)) 
//     {
//         echo '<script type="text/javascript">alert("Record Inserted")</script>';
//     } 
//     else 
//     {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//     }
//     mysqli_close($conn);
// }

// pro_insert($pro_name,$pro_sku,$pro_type,$pro_cat,$pro_cp,$pro_sp,$pro_tp,$pro_price,$pro_status,$pro_create,$pro_update);
// */

?>