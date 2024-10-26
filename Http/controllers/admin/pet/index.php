<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$pets = $db->query('SELECT * FROM pets')->get();

view('admin/pet/index.view.php', [
    'pets' => $pets
]);