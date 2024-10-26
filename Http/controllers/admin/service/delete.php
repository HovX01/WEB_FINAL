<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$service = $db->query("SELECT * FROM services WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$db->query("DELETE FROM services WHERE id = :id", [
    'id' => $service['id']
]);

redirect('/admin/service');