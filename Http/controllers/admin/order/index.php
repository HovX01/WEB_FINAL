<?php

$db = app(\Core\Database::class);
$orders = $db->query('SELECT * FROM orders ORDER BY created_at DESC')->get();
$orders = array_map(function ($order) use ($db) {
    $order['products'] = $db->query('SELECT * FROM products WHERE id IN (SELECT product_id FROM product_orders WHERE order_id = :order_id)', [
        'order_id' => $order['id']
    ])->get() ?? [];
    $order['customer'] = $db->query('SELECT username FROM users WHERE id = :id', ['id' => $order['created_by']])->find()['username'] ?? '';
    return $order;
}, $orders);
view('admin/order/index.view.php', [
    'orders' => $orders
]);