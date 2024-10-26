<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$pet = $db->query("SELECT * FROM pets WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

view('admin/pet/edit.view.php', [
    'pet' => $pet
]);