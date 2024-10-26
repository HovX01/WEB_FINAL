<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$pet = $db->query("SELECT * FROM pets WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$form = ProductForm::validate($_POST);

$db->query("UPDATE pets SET name = :name, image = :image, price = :price WHERE id = :id", [
    'name' => $form['name'],
    'image' => $form['image'],
    'price' => $form['price'],
    'id' => $pet['id']
]);

redirect('/admin/pet');