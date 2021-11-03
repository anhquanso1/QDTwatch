<?php
include 'connect.php';
session_start();
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0; 
        $qt = 1;
        if (!isset($_SESSION['cart'])) {
            $cart = [];
            $quantity = [];
            $_SESSION['cart'] = [];
            $_SESSION['quantity'] = [];
        } else {
            $cart = $_SESSION['cart'];
            $quantity = $_SESSION['quantity'];
        }
        if (isset($id) && $id > 0) { 
            $i=0;
            while ($i < count($cart) && ($id != $cart[$i])) $i++;	
            if ($i < count($cart)) $quantity[$i] += $qt;
            else {		
                $cart[count($cart)] = $id;		
                $quantity[count($quantity)] = $qt;
            }
        }
        $_SESSION['cart'] = $cart;
        $_SESSION['quantity'] = $quantity;
        echo '<script type="text/javascript">window.location.replace("http://localhost/ShopDongHo/listcart.php")</script>';
    
