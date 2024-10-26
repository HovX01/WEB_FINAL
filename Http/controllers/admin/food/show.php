<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$params ??= [];

$food = $db->query("SELECT * FROM foods WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

view('admin/food/show.view.php', [
    'food' => $food
]);