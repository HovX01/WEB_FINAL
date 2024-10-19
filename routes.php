<?php
global $router;
$router->get('/', 'index.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->get('/logout', 'session/destroy.php')->only('auth');

// admin panel
$router->get('/admin', 'admin/index.php');

