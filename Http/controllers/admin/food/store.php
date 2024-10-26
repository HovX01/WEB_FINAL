<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$form = ProductForm::validate($_POST);

$db->query("INSERT INTO foods(name, image, price) VALUES(:name, :image, :price)", [
    'name' => $form['name'],
    'image' => $form['image'],
    'price' => $form['price']
]);

redirect('/admin/food');