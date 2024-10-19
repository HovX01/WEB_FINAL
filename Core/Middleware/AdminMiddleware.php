<?php

namespace Core\Middleware;

use Core\App;
use Core\Database;

class AdminMiddleware
{
    public function handle()
    {
        if (! $_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }
        $db = App::resolve(Database::class);
        $user = $db->query('SELECT * FROM users WHERE email = ?', [
          $_SESSION['user']['email']
        ])->find();
        if($user['role'] != 'admin'){
            abort(403);
        }
    }
}