<?php
 session_start();
 include 'connect.php'; 
 
?>
  <!DOCTYPE html>
  <html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="site.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>Đồng hồ chính hãng</title>
  <link rel="icon" href="/ShopDongHo/image/logoQTDnho.png" type="image/jpg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    
    
    ul li:hover{
      background-color: #333333;
    } 
    ul li a{
      font-size: 1.5rem;
      font-weight: bold;
    }
    #change_color_menu{
      color: white;
      font-weight: bold;
  
    
    }
    #change_color_menu:hover{
      color: black;
      font-weight: bold;
      font-style: italic;
      font-size: 2rem;
    }
    .menu__header{
      background: #333333;
      top:0;
      position: fixed;
      z-index:3;
      right:15px;
      left:15px;

      
     
    }
    #myCarousel{
      padding-top: 50px;
    }
   
    
    
    .img-bar{
      left:0;
      display: inline-block;
    }
  </style>
  </head>
  <body>
    
<div class="container-fluid" >
     <header>
        <nav class="navbar  menu__header" role="navigation">
        
            
            <div class="collapse navbar-collapse" id="collapse">
            <!-- form search thong tin san pham-->
            <form action="" method="GET" style="height: 0px; ">
            <div class="img-bar">
                <a href="http://localhost/ShopDongHo/index.php">
                <img src="/ShopDongHo/image/logoQTDnho.png" alt="" height="45px" ;>
                </a>
              </div>
              <input type="text" name="name" style="margin-left: 55px;margin-top:11px" value="<?=isset($_GET['name'])?$_GET['name']:"";?>"  />
              <input type="submit" value="Tìm kiếm" class="btn btn-danger">
              
             
            </form>


                <ul class="nav navbar-nav navbar-right">
                
                    <li><a href="index.php"      id="change_color_menu">Trang chủ</a></li>
                    <li><a href="listcart.php"   id="change_color_menu">Giỏ hàng</a></li>
                    <li><a href="/ShopDongHo/baohanh.php"   id="change_color_menu">Chính sách bảo hành</a></li>
                  
                    <?php 
                     if(isset($_SESSION['username']))
                     {
                        $name = $_SESSION['username']; 
                      ?>
                      <li>
                        <a href="information_customer.php?id=<?php echo $_SESSION['makh']; ?>" id="change_color_menu">
                      <?php echo $name ; ?>
                          <img src="image/img_avatar.png" alt="" width="20px" style="border-radius: 50%;">
                        </a>
                    </li>  
                    <?php }else{ ?> 
                    <li><a href="register_customer.php" id="change_color_menu">Đăng ký</a></li>
                    <li><a href="login_customer.php" id="change_color_menu">Đăng nhập</a></li>
                     <?php } ?>             
                </ul>
            </div>
        </nav>
     </header>  
</div>



<div class="container-fluid" style="width: 100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" ></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/bn1.png" alt="Los Angeles" style="width:100%; height:400px" >
      </div>

      <div class="item ">
        <img src="image/bn2.png" alt="Chicago" style="width:100%; height:400px">
      </div>

      <div class="item">
        <img src="image/bn3.png" alt="Chicago" style="width:100%; height:400px">
      </div>

      <div class="item">
        <img src="image/bn4.png" alt="Chicago" style="width:100%; height:400px">
      </div>

     
     

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


 




    





