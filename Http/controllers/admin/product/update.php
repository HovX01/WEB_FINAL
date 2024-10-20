<?php

use Core\Database;
use Http\Forms\ProductForm;

$db = app(Database::class);

$product = $db->query("SELECT * FROM products WHERE id = :id", [
    'id' => $params[0]
])->findOrFail();

$form = ProductForm::validate([
    'id' => $product['id'],
    ...$_POST
]);

$db->query("UPDATE products SET title = :title, slug = :slug, description = :description, category_id = :category_id, available = :available, price = :price, image = :image WHERE id = :id", [
    'id' => $form->attributes['id'],
    'title' => $form->attributes['title'],
    'slug' => $form->attributes['slug'],
    'description' => $form->attributes['description'],
    'category_id' => $form->attributes['category_id'],
    'available' => $form->attributes['available'],
    'price' => $form->attributes['price'],
    'image' => $form->attributes['attachment'] ?? null,
]);

redirect('/admin/product');