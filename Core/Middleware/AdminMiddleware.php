<?php

namespace Core\Middleware;
use Core\App;

class AdminMiddleware
{
    public function handle()
    {
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
        $db = App::resolve(Database::class);
        $user = $db->prepare('SELECT * FROM users WHERE email = ?')->execute([$_SESSION['user']])->fetch();
        if($user['role'] != 'admin'){
            abort(403);
        }
    }
}