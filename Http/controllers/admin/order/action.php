<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$id = $params[0] ?? null;

$order = $db->query('SELECT * FROM orders WHERE id = ?', [$id])->findOrFail();

$action = $_POST['action'] ?? null;

if ($action == 'cancel') {
    $db->query('UPDATE orders SET status = :status WHERE id = :id', [
        'status' => 'cancelled',
        'id' => $id
    ]);
} else if ($action == 'mark-as-paid') {
    $db->query('UPDATE orders SET status = :status WHERE id = :id', [
        'status' => 'paid',
        'id' => $id
    ]);
} else if ($action == 'mark-as-pending') {
    $db->query('UPDATE orders SET status = :status WHERE id = :id', [
        'status' => 'pending',
        'id' => $id
    ]);
}

redirect('/admin/order/' . $id);