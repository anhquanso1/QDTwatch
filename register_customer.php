<?php 
include 'header.php';
?>



<?php 
  if(isset($_POST['submit']))// khi nhân submit thì sẽ thực thi các lệnh sau
  {
   
    $hovaten = $_POST['hovaten'];
    $tendangnhap = $_POST['tendangnhap'];
    $matkhau = $_POST['matkhau'];
    $rematkhau = $_POST['rematkhau'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $ngaysinh = $_POST['ngaysinh'];
    //if('')
    $gioitinh = $_POST['gioitinh'];
    
     //var_dump("ban da dang nhap thanh cong");
    if($hovaten =="" || $tendangnhap == ""|| $matkhau == "" || $rematkhau == "" || $sdt == "" ||
      $email == ""|| $email == "" ||$ngaysinh == "" )
    {
        echo '<script>alert("Vui lòng điền đầy đủ thông tin");</script>';
    }else
    {
      
         // kt xem người dùng đã nhập đúng mật khẩu chưa
        if($matkhau!==$rematkhau)
        {
            echo '<script>alert("Bạn nhập mật khẩu không khớp");</script>';
        }
        //thực thi các lệnh 
        $sql = "INSERT INTO `customer`( `hovaten`, `tendangnhap`, `matkhau`, `rematkhau`, `email`, `sdt`, `ngaysinh`, `gioitinh`) VALUES ('$hovaten', '$tendangnhap', '$matkhau','$rematkhau','$email', '$sdt','$ngaysinh', '$gioitinh')";
        $query = mysqli_query($conn,$sql);
        if($query)
        {
            //echo '<script>alert("Bạn đã đang ký thành công");</script>';
            //header('location: login_customer.php');
            echo '<script type="text/javascript">window.location.replace("index.php")</script>';
            
        }
        else{
            echo "Lỗi rồi".mysqli_error($conn);
        }

     }

  }
?>
<style>
    .row{
        padding-top:20px ;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                            <input type="text" class="form-control" id="" placeholder="Nhập Họ và tên" name="hovaten">
                        </div>

                        
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập Tên đăng nhập" name="tendangnhap">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập Mật khẩu" name="matkhau">
                        </div>   
                        
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Nhập lại Mật khẩu" name="rematkhau">
                        </div>   
                        
                        <div class="form-group">
                            <label for="">Nhập số điện thoại</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập sdt" name="sdt">
                        </div>   
                        
                        <div class="form-group">
                            <label for="">Nhập gmail</label>
                            <input type="text" class="form-control" id="" placeholder="Nhập gmail" name="email">
                        </div>    
                        
                        <div class="form-group">
                            <label for="">Giới tính</label>
                            
                            <input type="radio"  id="" placeholder="Nhập gmail" name="gioitinh" value="Nam"> Nam   
                            <input type="radio"  id="" placeholder="Nhập gmail" name="gioitinh" value="Nu"> Nữ
                        </div>       
                           
                        <div class="form-group">
                            <label for="">Ngày tháng năm sinh</label>
                            <input type="date" class="form-control" id="" placeholder="Nhập Ngày tháng năm sinh"  name="ngaysinh">
                        </div>               
                        
                        <button type="submit" class= "btn btn-primary" name="submit" >Đăng ký</button>                    
                    </form> 
                </div>     
            </div>
        </div>
    </div>
</div>



 <?php include 'footer.php';?>