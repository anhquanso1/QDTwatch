<?php 
include 'header.php';
 ?>
<head>
<style>
.change_color_name{
    color:#dbaf56;
}    
.change_color_name:hover
{
    color: black;
    font-weight: bold;
}
.change_color_price{
    font-size: 15px;
    color: black;
    

}

.product-price{
    font-size: 15px;
    color: red;
}
.change_box{
    margin-top:30px ;
    margin-bottom: 30px;
}
.product-img{
    
    height: auto;
    margin: 10px auto;
    overflow: hidden; /** DÒNG BẮT BUỘC CÓ **/
    position: relative;
    
}

.product-img img {
  
  transition: all 0.3s;
}

.product-img:hover img {
    -webkit-transform: scale(1.2);
            transform: scale(1.2);
}
.sp2{
    text-align:center;
    
}
.sp1{
  
    background-color:#dbaf56;
    height:50px
}
.sp1 >h1{
    text-align:center;
    padding: 6px;
    margin: 0;
}


</style>
</head>
<?php


    // xử lý tính toán phân trang
    //************ lay gia tri nhap vao  **************** */

    $search = isset($_GET['name']) ? $_GET['name'] : "";

    
    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 9;// số sản phẩm
    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;// sô trang hiện tại
    $offset = ($current_page - 1) * $item_per_page; // so trang - 1 * với số sản phâm muốn hiển thị
    // code phân trang  SELECT * FROM `product` WHERE `tensp` LIKE '%Oppo%'


    


    if($search)
    {
        $products = mysqli_query($conn,"SELECT * FROM product WHERE `tensp` LIKE '%". $search ."%' ORDER BY masp DESC LIMIT ".$item_per_page." OFFSET ".$offset);
        // query tất cả các sản phẩm
        $totalRecords =mysqli_query($conn,"SELECT * FROM product WHERE `tensp` LIKE '%". $search ."%'"); 
    }
    else
    {
        $products = mysqli_query($conn,"SELECT * FROM product ORDER BY masp DESC LIMIT ".$item_per_page." OFFSET ".$offset);
        $totalRecords =mysqli_query($conn,"SELECT * FROM product"); // query tất cả các sản phẩm
    }

    $totalRecords = $totalRecords->num_rows; // lây tông số sản phẩm hiên có trong table
    $totalPages = ceil($totalRecords/$item_per_page);// $totalPages tổng số trang hiển thị sản phẩm
 ?>
 <div class="sp1">
 <h1>SẢN PHẨM CÓ SẴN</h1>
 
 </div>
    <div class="col-sm-10  col-xs-12">
        <div  style ="margin-left :199px"; class="row card_sp">
            <?php while($row = mysqli_fetch_array($products)) {?>
                <div class="sp2">
 <div class="col-sm-4 col-xs-12 change_box">
                    <a href="detailproduct.php?id=<?php echo $row['masp'] ?>">
                    <div class="product-img">
                        <img src="uploads/<?php echo $row['anh']?>" alt="" width="auto" height="222"/>
                    </div>
                    </a>

                    <h3 > 
                        <a href="detailproduct.php?id=<?php echo $row['masp'] ?>"   style="text-decoration:none;">
                            <strong class="change_color_name"><?php echo $row['tensp']?></strong>
                        </a>  
                    </h3>


                    <label for=""> Giá:</label> <span ><del class="change_color_price"><?php echo number_format($row['giacu']) ?> </del> đ</span><br>
                    <label for="">Giảm còn:</label> <span class="product-price"><?php echo number_format($row['giamoi']) ?> </span>đ<br>
                    
                    <p>Số lượng hiện có: <?php echo $row['soluong']?> </p>


                    <a href="addcart.php?id=<?=$row['masp']?>" class="btn btn-danger">
                       Mua hàng
                    </a>
                    
                </div>
 </div>

          
            <?php } ?>
        </div>
        
            <?php include 'pagination.php'; ?>
        
    </div>
    
</div>

<div>
    <?php include 'tintuc.php'; ?>
    </div>
   
<?php include 'footer.php';?>