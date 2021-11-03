
<?php 
include '../bootstrap.php';

?>
<style>
.form-search{
    margin-left: 35%;
    margin-top: 20px;
    margin-bottom: 20px;
}
#search{
    width: 300px;
    height: 32px;
    border-radius: 100px;
    float: left;
    margin-right: 10px;
}
#inputsearch{
    border-radius: 100px;
    width: 100px;
}
.panel-info>.panel-heading{
    background-color:silver;
}
</style>

<?php 
   
    $search = isset($_GET['name']) ? $_GET['name'] : "";
    if($search)
    {
        $product = mysqli_query($conn, "SELECT product.*,category.nhasanxuat AS 'name_cate' FROM product JOIN category ON product.cateid = category.cateid  WHERE `tensp` LIKE '%". $search ."%' " );
    }else{
        $product = mysqli_query($conn, "SELECT product.*,category.nhasanxuat AS 'name_cate' FROM product JOIN category ON product.cateid = category.cateid" );  
    }
    
?>

<div class="container">
    <div class="row">
    
        <div class="col-md-12">
            <div class="panel panel-info">

                <div class="panel-heading">
                    <h3 class="panel-title " style="text-align: center; color:black; font-size: 2rem" >Danh Sách Danh Mục</h3>
                </div>
                <div class="panel-heading" style="text-align:center" >
                <a href="add_product.php">
                        <button type="button" class="btn btn-warning" >Thêm sản phẩm mới</button>
                    </a>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên sản phẩm</th>
                                <th>Nhà sản xuất</th>
                                <th>Dòng sản phẩm</th>
                                <th>Số lượng </th>
                                <th>Giá sản phẩm</th>
                                <th>Giá khuyến mãi</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach($product as $key => $value){

                            ?>
                            <tr>
                                <td> <?php echo $key +1; ?></td>
                                <td> <?php echo $value['tensp']?></td>
                                <td> <?php echo $value['name_cate']?></td>
                                <td> <?php echo $value['dongsp']?></td>
                                <td> <?php echo $value['soluong']?></td>
                                <td> <del> <?php echo number_format($value['giacu']) ?> VND</del></td>
                                <td> <?php echo number_format($value['giamoi']) ?> VND</td>
                                
                                
                                <td> 
                                    <img src="../uploads/<?php echo $value['anh']?>" alt="" width="100px"/>
                                 </td>
                                 <td> <?php echo $value['mota']?></td>
                                 
                                 <td> 
                                     <a href="delete.php?id=<?php echo $value['masp']?>" class="btn btn-danger"> Xóa</a>
                                    <br/>
                                     <a href="update.php?id=<?php echo $value['masp']?>" class="btn btn-info">Sửa</a>
                                 </td>
                            </tr>
                                <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  
</div>



<script src="bootstrap/js/bootstrap.min.js"></script> 