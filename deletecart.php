<?php
    session_start();
    include 'connect.php';

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $cart = $_SESSION['cart'];
    $quantity = $_SESSION['quantity'];
   if(isset($_GET['id'])) {
       $flag = 0;
       foreach ($cart as $k => $v) { // $v là id của từng sản phẩm trong giỏ hàng
           if ($v == $id) {
               unset($cart[$k]);
               unset($quantity[$k]);
               $flag = 1;
               break;
           }
       }
       $_SESSION['cart'] = $cart;
       $_SESSION['quantity'] = $quantity;
       if ($flag == 1)
        echo '<script type="text/javascript">window.location.replace("http://localhost/ShopDongHo/listcart.php")</script>';
   } else{
       var_dump("ko xoa dc");
   }
