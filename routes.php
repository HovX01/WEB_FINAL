<?php
global $router;
$router->get('/', 'index.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->get('/logout', 'session/destroy.php')->only('auth');
$router->get('/checkout', 'checkout/index.php')->only('auth');

// admin panel
$router->get('/admin', 'admin/index.php')->only('admin');

$router->post('/file/upload', 'file/upload.php')->only('admin');

$router->get('/admin/product', 'admin/product/index.php')->only('admin');
$router->get('/admin/product/create', 'admin/product/create.php')->only('admin');
$router->get('/admin/product/{id}', 'admin/product/show.php')->only('admin');

$router->get('/admin/category', 'admin/category/index.php')->only('admin');
$router->get('/admin/order', 'admin/order/index.php')->only('admin');
