<?php
    session_start();
    include 'connect.php';

    $id = $_POST['id'];
    $qty = $_POST['quantity'];
    $cart = $_SESSION['cart'];
    $quantity = $_SESSION['quantity'];
    $flag = 0;
    foreach ($cart as $k => $v) { // $v là id của từng sản phẩm trong giỏ hàng
        if ($v == $id) {
            if ($quantity[$k] != $qty) {
                $quantity[$k] = $qty;
                $flag = 1;
            }
            break;
        }
    }
    $_SESSION['cart'] = $cart;
    $_SESSION['quantity'] = $quantity;
    echo $flag;
  
   