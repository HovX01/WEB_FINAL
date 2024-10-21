<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$form = ProductForm::validate($_POST);

$db->query("INSERT INTO products (title, slug, description, category_id, price, image,created_at,updated_at) VALUES (:title, :slug, :description, :category_id, :price, :image,NOW(),NOW())", [
    'title' => $form->attributes['title'],
    'slug' => $form->attributes['slug'],
    'description' => $form->attributes['description'],
    'category_id' => $form->attributes['category_id'],
    'price' => $form->attributes['price'],
    'image' => $form->attributes['attachment'] ?? null
]);

redirect('/admin/product');