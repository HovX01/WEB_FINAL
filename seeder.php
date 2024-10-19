<?php

use Core\App;
use Core\Database;

require 'vendor/autoload.php';
const BASE_PATH = __DIR__.'/';
require BASE_PATH . 'Core/functions.php';
require BASE_PATH .'bootstrap.php';

$db = App::resolve(Database::class);

$admin = 'admin@gmail.com';
$password = '123';
$username = 'admin';

$user = $db->query('SELECT id FROM users WHERE email = :email', ['email' => $admin])->find();
if (!$user) {
    $db->query('INSERT INTO users(email, username, password, role) VALUES(:email, :username, :password, :role)', [
        'email' => $admin,
        'username' => $username,
        'password' => password_hash($password, PASSWORD_BCRYPT),
        'role' => 'admin'
    ]);
}

// seed products
function mapFolder($dir): ?array
{
    $results = [];

    // Validate directory existence and readability
    if (!is_dir($dir) || !is_readable($dir)) {
        return null; // Handle error or throw exception
    }

    $scanned = scandir($dir);
    unset($scanned[array_search('.', $scanned, true)]);
    unset($scanned[array_search('..', $scanned, true)]);

    foreach ($scanned as $item) {
        $fullPath = realpath($dir . DIRECTORY_SEPARATOR . $item); // Get full path for clarity

        if (is_dir($fullPath)) {
            $results['folders'][$item] = mapFolder($fullPath); // Recursively map subfolders
        } else {
            $results['items'][] = $item; // Add items to the 'items' array
        }
    }

    return $results;
}

$items = mapFolder(base_path('/public/furniture/items'))['folders'];
//$galleries = mapFolder(base_path('/public/gallery'))['items'];
foreach ($items as $categoryName => $products) {
    $category = $db->query('SELECT id FROM categories WHERE title = :title', ['title' => $categoryName])->find();
    if (!$category) {
        $db->query('INSERT INTO categories(title) VALUES(:title)', ['title' => $categoryName]);
        $category = $db->query('SELECT id FROM categories WHERE title = :title', ['title' => $categoryName])->find();
    }
    foreach ($products['items'] as $productName) {
        $productImage = $productName;
        $productName = explode('.', $productName)[0];
        $product = $db->query('SELECT id FROM products WHERE slug = :slug', ['slug' => str_slug($productName)])->find();
        if (!$product) {
            $db->query('INSERT INTO products(title, slug, description, category_id, available, price, image) VALUES(:title, :slug, :description, :category_id, :available, :price, :image)', [
                'title' => $productName,
                'slug' => str_slug($productName),
                'description' => null,
                'category_id' => $category['id'],
                'available' => true,
                'price' => mt_rand(10, 500) + [0,0.25,0.5,0.75][mt_rand(0,3)],
                'image' => "/furniture/items/$categoryName/$productImage",
            ]);
        }
    }
}