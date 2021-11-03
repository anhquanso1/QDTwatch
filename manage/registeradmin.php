<?php include '../bootstrap.php';?>

<head>
    <meta charset="utf-8">
    <title>Register admin</title>

<style>

body{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: url('../image/background.jpg') no-repeat;
    background-size: cover; 
}

h1{
    font-size: 50px;
    color: white;
}
.form-control{
    background: white;
    margin-top: 12px;
    color: gray;
    font-size: 18;
}
.col-md-4{
    background: rgba(0,0,0,0.9);
    margin-top: 100px;
    height: 500px;

}
.btn-info{
    margin-top: 20px;
    width: 100%;
    font-size: large;
}
.col-md-4{
    font-size:30px;
    color:white;
    text-align: center;
}
</style>
</head>

<?php
    if(isset($_POST['submit']))// khi nhân submit thì sẽ thực thi các lệnh sau
    {
     //INSERT INTO `manage`(`idmanage`, `hovaten`, `tendangnhap`, `matkhau`, `rematkhau`, `email`, `sdt`) VALUES (
      $hovaten = $_POST['hovaten'];
      $tendangnhap = $_POST['tendangnhap'];
      $matkhau = $_POST['matkhau'];
      $rematkhau = $_POST['rematkhau'];
      $email = $_POST['email'];
      $sdt = $_POST['sdt'];
      
     
      if($hovaten =="" || $tendangnhap == ""|| $matkhau == "" || $rematkhau == "" ||
        $email == "" || $sdt == "")// kt xem ngươi dùng đã  nhập đầy dủ thông tin chưa
      {
          echo '<script>alert("Vui lòng điền đầy đủ thông tin");</script>';
      }else
      {
      
          if($matkhau!==$rematkhau)
          {
              echo '<script>alert("Bạn nhập mật khẩu không khớp");</script>';
          }
       


          $sql = "INSERT INTO `manage`(`hovaten`, `tendangnhap`, `matkhau`, `rematkhau`, `email`, `sdt`) VALUES ('$hovaten', '$tendangnhap', '$matkhau','$rematkhau','$email', '$sdt')";
          $query = mysqli_query($conn,$sql);
          if($query)
          {
             echo '<script>alert("Bạn đã đang ký thành công. Bây giờ bạn có thể đăng nhập");</script>';
           
              echo '<script type="text/javascript">window.location.replace("loginadmin.php")</script>';
              
          }
          else{
              echo "Lỗi rồi".mysqli_error($conn);
          }
  
       }
  
    }

?>

<body>
    <div class="container" style="margin-left: 35%;">
        <div class="row">
            <form action=""  method="POST" role="form" autocomplete="off">
        
            <div class="col-md-4">Đăng kí admin </h1>
                <input type="text" class="form-control" name="hovaten" placeholder="Họ và Tên ">
                <input type="text" class="form-control" name="tendangnhap" placeholder="Tên đăng nhập ">
                <input type="password" class="form-control" name="matkhau" placeholder="Mật khẩu">
                <input type="password" class="form-control" name="rematkhau" placeholder="Nhập lại mật khẩu">
                <input type="email" class="form-control" name="email" placeholder="E-mail">
                <input type="text" class="form-control" name="sdt" placeholder="Số điện thoại ">
                <button type="submit" class= "btn btn-info" name="submit" >Đăng kí</button>
                <a href="loginadmin.php"  class= "btn btn-info">Đăng nhập</a> 
            </div>

            </form>
        </div>
    </div>
</body>