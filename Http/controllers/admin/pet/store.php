<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$form = ProductForm::validate($_POST);

$db->query("INSERT INTO pets(name, image, price) VALUES(:name, :image, :price)", [
    'name' => $form['name'],
    'image' => $form['image'],
    'price' => $form['price']
]);

redirect('/admin/pet');