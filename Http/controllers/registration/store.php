<?php

use Core\App;
use Core\Authenticator;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password, 7, 255)) {
    $errors['password'] = 'Please provide a password of at least seven characters.';
}
if (!Validator::required($username)) {
    $errors['username'] = 'Username is required';
}
$user = $db->query('select * from users where email = :email', [
  'email' => $email
])->find();
if($user){
    $errors['email'] = 'Email already taken';
}
if (! empty($errors)) {
    return view('registration/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('INSERT INTO users(email, username, password) VALUES(:email, :username, :password)', [
  'email' => $email,
  'username' => $username,
  'password' => password_hash($password, PASSWORD_BCRYPT)
]);

(new Authenticator)->login(['email' => $email]);

header('location: /');
exit();
