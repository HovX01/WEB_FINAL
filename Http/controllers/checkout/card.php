<?php
use Core\Session;
header('Content-Type: application/json');
$productId = $_POST['product_id'];

$session = Session::get('cart', []);
if(!isset($session[$productId])){
    $session[$productId] = 1;
}else{
    $session[$productId]++;
}
Session::put('cart', $session);

echo json_encode([
  'success' => true,
  'message' => 'Product added to cart'
]);
