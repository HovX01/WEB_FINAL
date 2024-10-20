<?php

use Core\App;
use Core\Database;

if (!(isset($_SESSION['cart']) && $_SESSION['cart'])) {
    redirect('/');
}

$db = App::resolve(Database::class);
$productIds = array_keys($_SESSION['cart']);

if (count($productIds) <= 0) {
    redirect('/');
}

$products = $db->query('SELECT * FROM products WHERE id IN (' . implode(',', $productIds) . ')')->get();

$total = 0;
foreach ($products ?? [] as $product) {
    $total += $product['price'] * $_SESSION['cart'][$product['id']] ?? 1;
}

$db->query('INSERT INTO orders(created_by, total, status) VALUES(
            :created_by,
            :total,
            :status
        )', [
    'created_by' => $_SESSION['user']['id'],
    'total' => $total,
    'status' => 'pending'
]);

$order = $db->query('SELECT * FROM orders ORDER BY id DESC LIMIT 1')->find();

foreach ($products ?? [] as $product) {
    $db->query('INSERT INTO product_orders(product_id, order_id, quantity) VALUES(:product_id, :order_id, :quantity)', [
        'product_id' => $product['id'],
        'order_id' => $order['id'],
        'quantity' => $_SESSION['cart'][$product['id']] ?? 1
    ]);
}

$_SESSION['cart'] = [];

redirect('/');

