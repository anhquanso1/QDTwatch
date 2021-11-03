
<?php 
include '../bootstrap.php';// trong này có ket noi vs csdl

$category= mysqli_query($conn,"SELECT * FROM category");// query table category



if(isset($_POST['tensp']))
{
    $cateid   = $_POST['cateid'];
    $tensp = $_POST['tensp'];
    $dongsp = $_POST['dongsp'];
    $soluong = $_POST['soluong'];
    $giacu = $_POST['giacu'];
    $giamoi = $_POST['giamoi'];
    $mota = $_POST['mota'];
    $ngaybaohanh = $_POST['ngaybaohanh'];
    

   //echo "<pre>";
    //print_r($_FILES['anh']);
    $file_name = '';
    if(isset($_FILES['anh']) )
    {
        $efil = $_FILES['anh'];
        $file_name = date("Ymd-His").$file['name'];
        //bược 1: chuyên file từ bộ nhớ tmp_name vao thư mục uploads đã tạo
        move_uploaded_file($file['tmp_name'], '../uploads/'.$file_name);
    }
    else{  
        echo "Upload file thất bại";
    }
    //masp	tensp	cateid	dongsp	soluong	giacu	giamoi	anh	mota ngaybaohanh	
    $sql = "INSERT INTO product(tensp, cateid, dongsp, soluong, giacu, giamoi, anh, mota, ngaybaohanh)
     VALUES ('$tensp', '$cateid',' $dongsp','$soluong','$giacu','$giamoi', '$file_name','$mota','$ngaybaohanh')";
     $query = mysqli_query($conn,$sql);

     
     if($query)
     {
         header('location: product.php');

     }
     else{
        
         echo "Lỗi rồi".mysqli_error($conn);
     }
}

 ?>
<style>
    .row{
        padding-top: 30px;
        margin-left:150px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Thêm mới sản phẩm
                    </h3> 
                </div>
                <div class="panel-body">
                  <form action="" method="POST" role="form" enctype="multipart/form-data">
                     
                      <div class="form-group">
                          <label for="">Chọn hãng đồng hồ</label>
                         <select id="input" class="form-control"  name="cateid">
                             <option value="">Hãng đồng hồ</option>
                              <?php foreach($category as $cate) {?>  
                                <option value="<?php echo $cate['cateid'];?>"><?php echo $cate['nhasanxuat'];?></option>
                              <?php }?>
                         </select>
                      </div>

                     
                      <div class="form-group">
                          <label for="">Tên sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="tensp">
                      </div>

                   
                      <div class="form-group">
                          <label for="">Dòng sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập sản phẩm" name="dongsp">
                      </div>
                    
                       <div class="form-group">
                          <label for="">Số lượng sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập số lượng sản phẩm" name="soluong">
                      </div>
                  
                      <div class="form-group">
                          <label for="">Giá hiện tại</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập giá đồng hồ" name="giacu">
                      </div>

                   
                      <div class="form-group">
                          <label for="">Giá Khuyến mãi</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập giá khuyến mãi"  name="giamoi">
                      </div>

                        
                      <!-- <div class="form-group">
                          <label for="">Thời gian bảo hành</label>
                          <input type="date" class="form-control" id="" placeholder="Nhập giá khuyến mãi"  name="ngaybaohanh">
                      </div> -->

                    
                      <div class="form-group">
                          <label for="">Ảnh sản phẩm</label><br>
                          <input type="file"  id=""  name="anh" accept=".PNG,.GIF,.JPG"/>
                      </div>

                   
                      <div class="form-group">
                          <label for="">Mô tả sản phẩm</label>
                          <textarea rows="5" cols="" name="mota" id="input" class="form-control" >
                          </textarea>
                      </div>
                      <button type="submit" class= "btn btn-primary" name="submid" >Thêm mới</button>
                    <a href="product.php">
                        <button type="button" class="btn btn-success">Quay lại</button>
                    </a>
                    <a href="category.php">
                        <button type="button" class="btn btn-warning">Thêm hãng đồng hồ</button>
                    </a>
                  </form>      
                </div>
            </div>
        </div>
    </div>
</div>

