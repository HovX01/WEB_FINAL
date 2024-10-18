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

$sql = '
INSERT INTO users(email, username, password, role) VALUES(:email, :username, :password, :role)
';

$db->query($sql, [
  'email' => $admin,
  'username' => $username,
  'password' => password_hash($password, PASSWORD_BCRYPT),
  'role' => 'admin'
]);