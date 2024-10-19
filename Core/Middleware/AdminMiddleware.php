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
        if($_SESSION['user']['role'] != 'admin'){
            abort(403);
        }
    }
}