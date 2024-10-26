<?php

use Core\Database;

$db = app(Database::class);
$services = $db->query('SELECT * FROM services')->get();
$pets = $db->query('SELECT * FROM pets')->get();
$foods = $db->query('SELECT * FROM foods')->get();

view("index.view.php", [
    'heading' => 'Home',
    'services' => $services,
    'pets' => $pets,
    'foods' => $foods
]);