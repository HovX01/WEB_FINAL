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
$router->post('/admin/store', 'admin/product/store.php')->only('admin');
$router->get('/admin/product/{slug}', 'admin/product/show.php')->only('admin');
$router->get('/admin/product/{slug}/edit', 'admin/product/edit.php')->only('admin');
$router->get('/admin/product/{slug}/update', 'admin/product/update.php')->only('admin');
$router->post('/admin/product/{slug}/delete', 'admin/product/delete.php')->only('admin');

$router->get('/admin/category', 'admin/category/index.php')->only('admin');
$router->get('/admin/category/create', 'admin/category/create.php')->only('admin');
$router->post('/admin/category/store', 'admin/category/store.php')->only('admin');
$router->get('/admin/category/{id}/edit', 'admin/category/edit.php')->only('admin');
$router->post('/admin/category/{id}/update', 'admin/category/update.php')->only('admin');
$router->post('/admin/category/{id}/delete', 'admin/category/delete.php')->only('admin');

$router->get('/admin/order', 'admin/order/index.php')->only('admin');
$router->get('/admin/order/{id}', 'admin/order/show.php')->only('admin');
