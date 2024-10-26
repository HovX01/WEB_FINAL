<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$food = $db->query("SELECT * FROM foods WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$form = ProductForm::validate($_POST);

$db->query("UPDATE foods SET name = :name, image = :image, price = :price WHERE id = :id", [
    'name' => $form['name'],
    'image' => $form['image'],
    'price' => $form['price'],
    'id' => $food['id']
]);

redirect('/admin/food');