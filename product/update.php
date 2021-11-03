
<?php
include "../bootstrap.php";

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $produc = mysqli_query($conn,"SELECT * FROM product  WHERE masp = $id");
        $pro = mysqli_fetch_assoc($produc);

    }

$category= mysqli_query($conn,"SELECT * FROM category");

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
    if(empty($_FILES['anh']['name']))
    {
        $image = $pro['anh'];
    }
    else{
     
        $file = $_FILES['anh'];
        $file_name = date("Ymd-His").$file['name'];
        move_uploaded_file($file['tmp_name'], '../uploads/'.$file_name);
        $image = $file_name;
    }

    $sql = "UPDATE product SET tensp ='$tensp', cateid = '$cateid', dongsp ='$dongsp',
     soluong ='$soluong',giacu='$giacu', giamoi='$giamoi',anh='$image', mota='$mota', ngaybaohanh='$ngaybaohanh' WHERE masp='$id'";
     $qr= mysqli_query($conn,$sql);
    if($qr)
    {
        header('location: product.php');
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
                        Sửa sản phẩm
                    </h3>
                </div>
                <div class="panel-body">
                  <form action="" method="POST" role="form" enctype="multipart/form-data">
                    
                      <div class="form-group">
                          <label for="">Nhà sản xuất</label>
                         <select id="input" class="form-control"  name="cateid">
                              <?php foreach($category as $cate) {?>
                             <option value="<?php echo $cate['cateid'];?>"<?php echo ($cate['cateid'] == $pro['cateid']) ? ' selected' : '' ?>>



                             <?php echo $cate['nhasanxuat'];?></option>
                              <?php }?>
                         </select>
                      </div>

                 
                      <div class="form-group">
                          <label for="">Tên sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Tên sản phẩm"
                          name="tensp" value="<?php echo $pro['tensp'] ?>" />
                      </div>
                  
                      <div class="form-group">
                          <label for="">Dòng sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Dòng sản phẩm"
                          name="dongsp" value="<?php echo $pro['dongsp'] ?>"/>
                      </div>
                
                  
                      <div class="form-group">
                          <label for="">Sô lượng sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Sô lượng sản phẩm"
                          name="soluong" value="<?php echo $pro['soluong'] ?>"/>
                      </div>
                 
                       <div class="form-group">
                          <label for="">Giá sản phẩm</label>
                          <input type="text" class="form-control" id="" placeholder="Giá sản phẩm"
                          name="giacu" value="<?php echo $pro['giacu'] ?>"/>
                      </div>

                  
                      <div class="form-group">
                          <label for="">Giá Khuyến mãi</label>
                          <input type="text" class="form-control" id="" placeholder="Nhập giá khuyến mãi"
                            name="giamoi" value="<?php echo $pro['giamoi'] ?>" >
                      </div>

                   
                      <div class="form-group">
                          <label for="">Ảnh sản phẩm</label><br>
                          <input type="file"  id=""  name="anh" accept=".PNG,.GIF,.JPG"/><br/>
                          <img src="../uploads/<?php echo $pro['anh'] ?>" alt="" width="80px">
                      </div>

                
                      <div class="form-group">
                          <label for="">Mô tả sản phẩm</label>
                          <textarea rows="5" cols="" name="mota" id="input" class="form-control" >
                          <?php echo $pro['mota']?>
                          </textarea>
                      </div>
                
                      <div class="form-group">
                          <label for="">Thơi gian bảo hành</label>
                          <input type="date" class="form-control" id="" placeholder="Thơi gian bảo hành"
                            name="ngaybaohanh" value="<?php echo $pro['ngaybaohanh'] ?>" >
                      </div>
               
                      <button type="submit" class= "btn btn-primary" name="submid" >Cập nhật</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../footer.php'?>
