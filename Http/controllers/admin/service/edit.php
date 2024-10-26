<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$service = $db->query("SELECT * FROM services WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

view('admin/service/edit.view.php', [
    'service' => $service
]);