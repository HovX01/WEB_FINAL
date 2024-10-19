<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);
$params ??= [];
$product = $db
    ->query("SELECT * FROM products where slug = ?", [
        $params['0']
    ])->find();

if ($product) {
    return view('admin.product.show', ['product' => $product]);
}

abort();