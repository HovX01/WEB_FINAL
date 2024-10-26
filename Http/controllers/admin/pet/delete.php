<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$pet = $db->query("SELECT * FROM pets WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$db->query("DELETE FROM pets WHERE id = :id", [
    'id' => $pet['id']
]);

redirect('/admin/pet');