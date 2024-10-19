<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$params ??= [];
$product = $db
    ->query("SELECT * FROM products where slug = ?", [
        $params['0']
    ])->find();
$categories = $db->query('SELECT * FROM categories')->get();
$product['category'] = $db->query('SELECT * FROM categories WHERE id = :id', ['id' => $product['category_id']])->find();

if ($product) {
    return view('admin/product/edit.view.php', [
        'product' => $product,
        'categories' => $categories
    ]);
}

abort();