<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $params[0] ?? null;

$order = $db->query('SELECT * FROM orders WHERE id = ?', [$id])->findOrFail();

$order['products'] = $db->query(
    '
        SELECT products.*, product_orders.quantity FROM products 
        JOIN product_orders ON products.id = product_orders.product_id 
        WHERE product_orders.order_id = :order_id
    ',
    [
        'order_id' => $order['id']
    ]
)->get();
$order['customer'] = $db->query('SELECT * FROM users WHERE id = :id', ['id' => $order['created_by']])->find();


view('admin/order/show.view.php', [
    'order' => $order
]);