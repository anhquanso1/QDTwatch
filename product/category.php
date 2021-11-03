<?php
 include '../bootstrap.php';


 if(isset($_POST['submit']))
{
    $nhasanxuat = $_POST['nhasanxuat'];
    // câu lênh truy vẫn thêm tên danh mục vào CSDL
    $sql = "INSERT INTO category(nhasanxuat) VALUES ('$nhasanxuat')";
    //hàm thực hiện truy vấn php
    $query = mysqli_query($conn,$sql);
    if($query)
    {
        echo "insert dữ liệu thành công";
    }
    else{
        echo "insert dữ liệu thất bại".mysqli_error($conn);
    }
}


?>
<style>
    .row{
        padding: 100px;
    }
   
</style>
<div class="container" >
    <div class="row">
        <div class="col-md-4">
            <form action="" method="POST">
                <table class="table table-bordered " style="margin-left: 70%;" >
                    <tr>
                    <td class="panel-title"> Thêm Hãng Đồng hồ :  </td>
                        <td>
                            <input type="text" name="nhasanxuat">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Thêm" name="submit" style="margin-left: 80px;  " class="btn btn-info" />
                            <a href="product.php">
                                <button type="button" class="btn btn-success">Quay lại</button>
                            </a>
                        </td>
                    </tr>
                </table> 
            </form>
        </div>    
    </div>
</div>