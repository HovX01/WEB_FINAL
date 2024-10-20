<?php

use Core\Session;

$isMinus = (isset($_POST['qty_minus']) ?? false);
$isPlus = (isset($_POST['qty_plus']) ?? false);
$productId = $_POST['product_id'];
$qty = $_POST['qty'] ?? 1;

if ($isMinus) {
    $session = Session::get('cart', []);
    if (!isset($session[$productId])) {
        $session[$productId] = 1;
    } else {
        $session[$productId]--;
    }
    if($session[$productId] == 0){
        unset($session[$productId]);
    }
    Session::put('cart', $session);
}
if ($isPlus) {
    $session = Session::get('cart', []);
    if (!isset($session[$productId])) {
        $session[$productId] = 1;
    } else {
        $session[$productId]++;
    }
    Session::put('cart', $session);
}
if(!$isMinus && !$isPlus){
    if($qty == 0){
        unset($session[$productId]);
    }else{
        $session[$productId] = $qty;
    }
    Session::put('cart', $session);
}

header('location: /checkout');