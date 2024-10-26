<?php

use Core\App;
use Core\Database;
$db = App::resolve(Database::class);

$service = $db->query("SELECT * FROM services WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

view('admin/service/show.view.php', [
    'service' => $service
]);