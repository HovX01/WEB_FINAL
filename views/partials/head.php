<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PET-SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
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