<?php
 include '../connect.php'; ?>
<head>
    <meta charset="utf-8">
    <title>Login admin</title>
<style>

body{
    margin: 0;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: url('../image/admin1.png') no-repeat;
    background-size: cover;  
}
.login-box{
    width: 280px;
    position: absolute;
    top: 50%;
    left: 47%; 
    margin-left: -100px;
    margin-top: -280px;
    color: white;
    
}
.login-box h1{
    float: left;
    font-size: 40px;
    margin-bottom: 50px;
    padding: 13px 64px;
    
}
.textbox{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid ;
    
}
.textbox i{
    width: 26px;
    float: left;
    text-align: center;
}
.textbox input{
    border: none;
    outline: none;
    background:none;
    color: black;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.btn{
    width: 100%;
    background: #d9534f;
    border: 2px solid #d9534f;
    color: white;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
    
    font-size: 17px;
    border-radius: 100px;
}
   

.textbox {
    padding: 0;
    height: 30px;
    position: relative;
    left: 0;
    outline: none;
    border: 1px solid #cdcdcd;
    border-color: rgba(0,0,0,.15);
    background-color: white;
    font-size: 16px;
    
}
.advancedSearchTextbox {
    width: 526px;
    margin-right: -4px;
}
</style>
</head>




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
            $sql ="SELECT * FROM `manage` WHERE  `tendangnhap` = '$username' AND `matkhau` = '$password' ";
            $query = mysqli_query($conn,$sql);
            // lấy dữ liệu sô cột trong table về
            $num_rows = mysqli_num_rows($query);
            if($num_rows)
            {
                $rows = mysqli_fetch_assoc($query);
                $_SESSION['is_logined'] = $rows;
                $_SESSION['idmanage'] = $rows['idmanage'];
                $_SESSION['usernameadmin'] = $rows['tendangnhap'];    
               echo '<script type="text/javascript">window.location.replace("manageadmin.php")</script>';

            }
            else{
                echo '<script>alert("Tên đăng nhập hoặc mật khẩu không đúng!");</script>';
            }

        }

    }
?>


<body>
    <form action=""  method="POST" role="form" >
        <div class="login-box">
            <h1>Login</h1>
            <div class="textbox">
                <i class="fas fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Username" name="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <input type="submit" class="btn" name="submit" id="" value="Đăng nhập">
           
        </div>
    </form>
</body>