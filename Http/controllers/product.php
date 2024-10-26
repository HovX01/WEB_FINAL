<?php

$db = app(\Core\Database::class);

$pets = $db->query('SELECT * FROM pets')->get();
$foods = $db->query('SELECT * FROM foods')->get();

view('product.view.php', [
    'pets' => $pets,
    'foods' => $foods
]);