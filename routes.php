<?php
global $router;
$router->get('/', 'index.php');

$router->get('/register', 'registration/create.php')->only('guest');
$router->post('/register', 'registration/store.php')->only('guest');

$router->get('/login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->get('/logout', 'session/destroy.php')->only('auth');

//about.php
//service.php
//product.php
//contact.php
$router->get('/about', 'about.php');
$router->get('/service', 'service.php');
$router->get('/product', 'product.php');

// admin panel
$router->get('/admin', 'admin/index.php')->only('admin');

$router->post('/file/upload', 'file/upload.php')->only('admin');

// pets
$router->get('/admin/pet', 'admin/pet/index.php')->only('admin');
$router->get('/admin/pet/create', 'admin/pet/create.php')->only('admin');
$router->post('/admin/pet/store', 'admin/pet/store.php')->only('admin');
$router->get('/admin/pet/{id}/edit', 'admin/pet/edit.php')->only('admin');
$router->post('/admin/pet/{id}/update', 'admin/pet/update.php')->only('admin');
$router->post('/admin/pet/{id}/delete', 'admin/pet/delete.php')->only('admin');

// foods
$router->get('/admin/food', 'admin/food/index.php')->only('admin');
$router->get('/admin/food/create', 'admin/food/create.php')->only('admin');
$router->post('/admin/food/store', 'admin/food/store.php')->only('admin');
$router->get('/admin/food/{id}/edit', 'admin/food/edit.php')->only('admin');
$router->post('/admin/food/{id}/update', 'admin/food/update.php')->only('admin');
$router->post('/admin/food/{id}/delete', 'admin/food/delete.php')->only('admin');

// services
$router->get('/admin/service', 'admin/service/index.php')->only('admin');
$router->get('/admin/service/create', 'admin/service/create.php')->only('admin');
$router->post('/admin/service/store', 'admin/service/store.php')->only('admin');
$router->get('/admin/service/{id}/edit', 'admin/service/edit.php')->only('admin');
$router->post('/admin/service/{id}/update', 'admin/service/update.php')->only('admin');
$router->post('/admin/service/{id}/delete', 'admin/service/delete.php')->only('admin');