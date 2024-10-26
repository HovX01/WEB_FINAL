<?php

use Core\Database;

$db = app(Database::class);
$services = $db->query('SELECT * FROM services')->get();
view('service.view.php', [
    'heading' => 'Service',
    'services' => $services
]);