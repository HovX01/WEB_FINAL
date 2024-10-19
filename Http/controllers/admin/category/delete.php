<?php

use Core\Validator;

$db = app(\Core\Database::class);

$id = $params[0];

$category = $db->query("SELECT * FROM categories WHERE id = ?", [$id])->findOrFail();

$db->query("DELETE FROM categories WHERE id = ?", [$id]);
header("Location: /admin/category");

exit;