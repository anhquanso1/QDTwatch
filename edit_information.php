<?php include 'header.php';?>



<?php
 if(isset($_GET['id']))
 {
     $id = $_GET['id'];
     $produc = mysqli_query($conn,"SELECT * FROM customer  WHERE makh = $id");
     $pro = mysqli_fetch_assoc($produc);
 }
if(isset($_POST['hovaten'])){
    $hovaten = $_POST['hovaten'];
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    $rematkhau = $_POST['rematkhau'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $ngaysinh = $_POST['ngaysinh'];
    $gioitinh = $_POST['gioitinh']; 

   
    $sql = "UPDATE customer SET hovaten = '$hovaten', tendangnhap = '$tendangnhap',matkhau = '$matkhau',rematkhau = '$rematkhau',email = '$email', sdt= '$sdt',ngaysinh = '$ngaysinh'  WHERE makh='$id' ";
    $query= mysqli_query($conn,$sql);
    if($query)
    {
         echo '<script type="text/javascript">window.location.replace("index.php")</script>';
    }
    else
    {
        echo "Lỗi rồi".mysqli_error($conn);
    }
}

?>





<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                       Đăng ký tài khoản
                    </h3> 
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form" autocomplete="off">
                     
                        <div class="form-group">
                            <label for="">Họ và tên</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập Họ và tên" name="hovaten" value="<?php echo $pro['hovaten']?>">
                        </div>

                
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập Tên đăng nhập" name="tendangnhap" value="<?php echo $pro['tendangnhap']?>" >
                        </div>
                     
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập Mật khẩu" name="matkhau" value="<?php echo $pro['matkhau']?>" >
                        </div>   
                     
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập lại Mật khẩu" name="rematkhau" value="<?php echo $pro['rematkhau']?>" >
                        </div>   
                     
                        <div class="form-group">
                            <label for="">Nhập số điện thoại</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập giá" name="sdt" value="<?php echo $pro['sdt']?>" >
                        </div>   
                  
                        <div class="form-group">
                            <label for="">Nhập gmail</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập gmail" name="email" value="<?php echo $pro['email']?>" >
                        </div>    
                  
                        <div class="form-group">
                            <label for="">Giới tính</label>
                            <input type="radio"  id="" placeholder="Nhập gmail" name="gioitinh"
                             value="Nam"> Nam
                            <input type="radio"  id="" placeholder="Nhập gmail" name="gioitinh"
                            value="Nữ"> Nữ
                        </div>       
                      
                        <div class="form-group">
                            <label for="">Ngày tháng năm sinh</label>
                            <input type="date" class="form-control" id=""  
                            value="<?php echo $pro['ngaysinh']?>"  name="ngaysinh">
                        </div>               
                 
                        <button type="submit" class= "btn btn-primary" name="submid" >Cập nhật</button>
                        <a href="information_customer.php" class="btn btn-info">Quay lại</a>    
                    </form>      
                </div>
            </div>
        </div>
    </div>
</div>











<?php include 'footer.php';?>