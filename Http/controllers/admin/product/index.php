<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$sql = 'SELECT * FROM products';

// filter from query string
if (isset($_GET['category'])) {
    $sql .= ' WHERE category_id = '.$_GET['category'];
} else if (isset($_GET['order'])) {
    $sql .= ' JOIN product_orders ON product_orders.product_id = products.id';
    $sql .= ' WHERE product_orders.order_id = '.$_GET['order'];
}

$products = $db->query($sql)->get() ?? [];
$products = array_map(function ($product) use ($db) {
    $product['category'] = $db->query('SELECT * FROM categories WHERE id = :id', ['id' => $product['category_id']])->find();
    return $product;
}, $products);

view('admin/product/index.view.php', [
    'products' => $products
]);