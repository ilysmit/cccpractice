<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <table border="2px">
        <tr>
            <th>Product Name</th>
            <th>pro_sku</th>
            <th>pro_type</th>
            <th>pro_category</th>
            <th>pro_cp</th>
            <th>pro_sp</th>
            <th>pro_tp</th>
            <th>pro_price</th>
            <th>pro_status</th>
            <th>pro_create</th>
            <th>pro_update</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
            include('../Backend/Connection/ccc_practise_connection.php');
            include('../Backend/functions/sql_function.php');

            $sql = select("tbl_ccc_product");
            $data = mysqli_query($conn,$sql);
            while($record = mysqli_fetch_assoc($data))
            {?>
                <tr>
                    <td><?php echo $record["pro_name"] ?></td>
                    <td><?php echo $record["pro_sku"] ?></td>
                    <td><?php echo $record["pro_type"] ?></td>
                    <td><?php echo $record["pro_category"] ?></td>
                    <td><?php echo $record["pro_cp"] ?></td>
                    <td><?php echo $record["pro_sp"] ?></td>
                    <td><?php echo $record["pro_tp"] ?></td>
                    <td><?php echo $record["pro_price"] ?></td>
                    <td><?php echo $record["pro_status"] ?></td>
                    <td><?php echo $record["pro_create"] ?></td>
                    <td><?php echo $record["pro_update"] ?></td>
                    <td><a href="../Frontend/ccc_product_update.php?pro_id= <?php  echo $record["pro_id"]; ?>">Update</a></td>
                    <td><a href="../Backend/ccc_product_delete.php?pro_id= <?php  echo $record["pro_id"]; ?>">Delete</a></td>
                </tr>
            <?php
            }
        ?>
    </table>
</body>
</html>









