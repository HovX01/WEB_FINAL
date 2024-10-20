<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$product = $db
    ->query("SELECT * FROM products where slug = ?", [
        $params['0']
    ])->findOrFail();

$categories = $db->query('SELECT * FROM categories')->get();
$product['category'] = $db->query('SELECT * FROM categories WHERE id = :id', ['id' => $product['category_id']])->find();

view('admin/product/edit.view.php', [
    'product' => $product,
    'categories' => $categories
]);