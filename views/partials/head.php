<!doctype html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <title>Furniture Store</title>
    <?php
        require_once('style.php')
    ?>
    <?php
    if (isset($style) && count($style) > 0) {
        foreach ($style as $item) {
            echo "<link rel='stylesheet' href='{$item}'>";
        }
    }
    ?>
</head>

<body id="app" class="h-full app">
    <div class="min-h-full">