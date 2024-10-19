<?php

use Core\App;
use Core\Database;

$db = app(Database::class);
$categories = $db->query('SELECT * FROM categories ORDER BY id ASC')->get();
return view('admin/product/create.view.php', [
    'categories' => $categories
]);