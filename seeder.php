<?php

use Core\App;
use Core\Database;
const BASE_PATH = __DIR__.'/';

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