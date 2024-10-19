<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$sql = 'SELECT * FROM products';

if (isset($_GET['category'])) {
    $sql .= ' WHERE category_id = '.$_GET['category'];
}
// load the category
$products = $db->query($sql)->get() ?? [];
$products = array_map(function ($product) use ($db) {
    $product['category'] = $db->query('SELECT * FROM categories WHERE id = :id', ['id' => $product['category_id']])->find();
    return $product;
}, $products);

view('admin/product/index.view.php', [
    'products' => $products
]);