<?php

use Illuminate\Support\Carbon;

$db = app(\Core\Database::class);
$teamMembers = 5;

$serviceCount = $db->query('SELECT COUNT(*) as count FROM services')->find();
$petCount = $db->query('SELECT COUNT(*) as count FROM pets')->find();
$foodCount = $db->query('SELECT COUNT(*) as count FROM foods')->find();

view('admin/index.view.php', [
    'serviceCount' => $serviceCount['count'],
    'petCount' => $petCount['count'],
    'foodCount' => $foodCount['count'],
    'teamMembers' => $teamMembers,
]);