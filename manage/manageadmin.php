<?php
    session_start();
    include '../bootstrap.php';
?>
<style>

#avatar{
    width: 100px;
    margin-left: 120px;
    border-radius: 1000px;

}
.text-left{
    font-size: 30px;
    padding-left: 40px;
    
    color: white; 
}
p{
    text-align: center;
    color: #ffff;
    font-size: 25px;
}
.col-md-4
{
    margin-top: 100px;
    margin-left :400px;
    
}
.btn-danger{
    width: 100%;
    font-size: 17px;
    border-radius: 100px;
}
#box-img{
    background: rgba(0,0,0,0.9); 
    color: white;
}

body{
    margin: 100px;
    padding: 0;
    font-family: Arial, Helvetica, sans-serif;
    background: url('../image/admin1.png') no-repeat;
    background-size: cover;
}

</style>

<?php
    if(isset($_SESSION['usernameadmin']))
    {
        $name = $_SESSION['usernameadmin'];
        $idmanage = $_SESSION['idmanage'];
    }
?>



<body>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <table class="table table-bordered table-hover">
            
                </tr>

                <tr>
                    <td>
                        <a href="http://localhost/ShopDongHo/product/add_product.php" class="text-left" style=" text-decoration: none;">Thêm sản phẩm</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://localhost/ShopDongHo/product/product.php" class="text-left" style=" text-decoration: none;">Danh sách sản phẩm</a>
                    </td>
                </tr>
                <tr>
                <tr>
                    <td>
                        <a href="http://localhost/ShopDongHo/product/category.php" class="text-left" style=" text-decoration: none;">Thêm hãng đồng hồ</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://localhost/ShopDongHo/manage/registeradmin.php" class="text-left" style=" text-decoration: none;">Thêm người quản trị</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="logoutadmin.php" class="btn btn-danger" >Đăng xuất</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>

