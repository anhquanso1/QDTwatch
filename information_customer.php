<?php include 'header.php'?>



<?php
   if(isset($_GET['id']))
   {
       $id = $_GET['id'];
       $customer = mysqli_query($conn,"SELECT * FROM customer  WHERE makh = $id");
       $cus = mysqli_fetch_assoc($customer);

   }
?>






<div class="container">
    <div class="row">

        <div class="col-md-6" style="margin-left: 27%;">
         
                <div class="panel-heading">
                    <h3 class="panel-title " style="text-align: center; color:brown; font-size: 2rem" > <img src="image/img_avatar.png" alt="" width="100px" style="border-radius: 50%;">
                </h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        
                        <thead>
                            <tr>
                                <td>Tên khách hàng</td>
                                <td><?php echo $cus['hovaten'] ?></td>
                            </tr>
                            <tr>
                                <td>Tên đăng nhập</td>
                                <td><?php echo  $cus['tendangnhap'] ?></td>
                            </tr><tr>
                                <td>Mật khẩu</td>
                                <td><?php echo $cus['matkhau'] ?></td>
                            </tr>
                            <tr>
                                <td>Gmail</td>
                                <td><?php echo $cus['email']?></td>
                            </tr>
                            <tr>
                                <td>Số điện thoại</td>
                                <td><?php echo $cus['sdt'] ?></td>
                            </tr>
                            <tr>
                                <td>Ngày sinh</td>
                                <td><?php echo $cus['ngaysinh'] ?></td>
                            </tr>
                            <tr>
                                <td>Giới tính</td>
                                <td><?php echo $cus['gioitinh'] ?></td>
                            </tr>
                            <tr>
                            <td style="text-align: center;" colspan="2">
                                <a href="logout.php" class= "btn btn-info">Đăng Xuất</a>
                                <a href="edit_information.php?id=<?php echo $cus['makh'] ?>" class="btn btn-primary">Cập nhật thông tin</a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'?>