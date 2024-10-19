<?php

$db = app(\Core\Database::class);

$id = $params[0];
$category = $db->query("SELECT * FROM categories WHERE id = ?", [$id])->find();
view('admin/category/edit.view.php', ['category' => $category]);