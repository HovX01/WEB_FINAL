<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$db->query("INSERT INTO services(title, description, icon_class) VALUES(:title, :description, :icon_class)", [
    'title' => $form['title'],
    'description' => $form['description'],
    'icon_class' => $form['icon_class']
]);

redirect('/admin/service');