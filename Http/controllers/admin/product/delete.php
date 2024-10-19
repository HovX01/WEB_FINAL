<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$product = $db->query("SELECT * FROM products WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$db->query("DELETE FROM products WHERE id = :id", [
    'id' => $product['id']
]);

redirect('/admin/product');