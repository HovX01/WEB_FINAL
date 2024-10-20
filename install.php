<?php

use Core\App;
use Core\Database;
const BASE_PATH = __DIR__.'/';
require BASE_PATH .'bootstrap.php';

$db = App::resolve(Database::class);

$sql = '
CREATE TABLE IF NOT EXISTS migrations (
    id SERIAL PRIMARY KEY,
    migration VARCHAR(255) NOT NULL,
    batch INT NOT NULL,
    migrated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
';
$db->query($sql);