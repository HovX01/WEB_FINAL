<?php

$db = app(\Core\Database::class);

$categories = $db->query("
SELECT
    c.*,
    (SELECT COUNT(*) FROM products p WHERE p.category_id = c.id) AS products_count
FROM
    categories c;
")->get();

view('admin/category/index.view.php', [
    'categories' => $categories,
]);