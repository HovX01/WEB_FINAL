<?php

use Core\Validator;
use Core\ValidationException;

$db = app(\Core\Database::class);

$id = $params[0];

$category = $db->query("SELECT * FROM categories WHERE id = ?", [$id])->findOrFail();

$errors = [];

if (! Validator::required($_POST['title'])) {
    $errors['title'] = 'A title is required.';
}elseif (! Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = 'A title of no more than 100 characters is required.';
}

if (! empty($errors)) {
    ValidationException::throw($errors, $_POST);
}

$db->query("UPDATE categories SET title = :title WHERE id = :id", [
    'id' => $id,
    'title' => $_POST['title']
]);

header("Location: /admin/category");
die();