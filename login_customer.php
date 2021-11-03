<?php 

include 'header.php';

?>

<?php 
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if($username == "" || $password == "" )
        {
            echo '<script>alert("Vui lòng điền đầy đủ thông tin");</script>';
        }
        else{
            // so sánh dữ liệu trong table mysqli vs người đang nhập có trùng nhau ko
            $sql ="SELECT * FROM `customer` WHERE tendangnhap = '$username' AND matkhau = '$password' ";
            $query = mysqli_query($conn,$sql);
            // lấy dữ liệu sô cột trong table về
            $num_rows = mysqli_num_rows($query);
            if($num_rows)
            {
                $rows = mysqli_fetch_assoc($query);
                $_SESSION['is_logined'] = $rows;
                $_SESSION['makh'] = $rows['makh'];
                $_SESSION['username'] = $rows['tendangnhap'];
                
                echo '<script type="text/javascript">window.location.replace("http://localhost/ShopDongHo/index.php")</script>';
            }
            else{
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!");</script>';
            }

        }

    }
?>

<head>
 <style>
div.background_img
{
    max-width: 1320px;
    margin-bottom: -1.5rem;
}
div.login_box
{
 margin-left: 33%;
 margin-top: 5%;
 margin-bottom: 5%;
 
}
.form-control{

    background: none ;
}
.dangky{
    padding:20px 0; 
    text-align:center;
}

 </style>
</head>
<div class="container-fluid background_img">
    <div class="row login_box ">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align: center;">
                       <img src="image/img_avatar.png" alt="" style="border-radius: 50%;width: 100px;"/>
                    </h3> 
                </div>
                <div class="panel-body">
                    <form action="" method="POST" role="form" autocomplete="off">
                       
                        <div class="form-group">
                            <label for="">Tên tài khoản</label>
                            <input type="text" class="form-control" id="" placeholder="Enter your name " name="username">
                        </div>
                       
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" class="form-control" id="" placeholder="Enter password" name="password">
                        </div>        
                      
                        
                        <div class="dangky">
                        <button type="submit" class= "btn btn-primary" name="submit" >Đăng nhập</button>  
                            <p>(Nếu bạn chưa có tài khoản vui lòng đăng ký)</p> 
                        <a class="btn btn-primary" href="register_customer.php"   >Đăng kí</a>
                        <a class="btn btn-primary" href="/ShopDongHo/manage/loginadmin.php"   >Admin</a>
                        </div>
                        
                    </form>      
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>