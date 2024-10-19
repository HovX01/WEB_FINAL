<?php

use Core\ValidationException;
use Core\Validator;

$db = app(\Core\Database::class);
$errors = [];

if (! Validator::required($_POST['title'])) {
    $errors['title'] = 'A title is required.';
}elseif (! Validator::string($_POST['title'], 1, 100)) {
    $errors['title'] = 'A title of no more than 100 characters is required.';
}

if (! empty($errors)) {
   ValidationException::throw($errors, $_POST);
}

$db->query("INSERT INTO categories (title) VALUES (:title)", [
    'title' => $_POST['title']
]);

header("Location: /admin/category");
exit;