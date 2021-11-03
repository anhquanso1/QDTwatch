<?php
    include '../connect.php';
    if(isset($_GET['id']))
    {
        $id =  $_GET['id'];
        $sql= "DELETE FROM product WHERE masp = $id";
        $query = mysqli_query($conn,$sql);

       
        if($query)
        {
            header('location: product.php');
        }
        else{
            echo "Lỗi rồi".mysqli_error($conn);
        }
    }

?>