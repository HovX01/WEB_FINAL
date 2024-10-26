<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$services = $db->query('SELECT * FROM services')->get();

view('admin/service/index.view.php', [
    'services' => $services
]);