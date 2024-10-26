<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$foods = $db->query('SELECT * FROM foods')->get();

view('admin/food/index.view.php', [
    'foods' => $foods
]);