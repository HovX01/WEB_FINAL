<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$food = $db->query("SELECT * FROM foods WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$db->query("DELETE FROM foods WHERE id = :id", [
    'id' => $food['id']
]);

redirect('/admin/food');