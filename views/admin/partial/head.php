<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Furniture Admin | <?php echo $title ?? ''; ?></title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="stylesheet" href="/admin-asset/css/app.min.css">
    <link rel="stylesheet" href="/admin-asset/css/vendor.min.css">
    <style>
        :root {
            --bs-body-font-size: 0.875rem;
        }
    </style>
    <?php
    if (isset($style) && count($style) > 0) {
        foreach ($style as $item) {
            echo "<link rel='stylesheet' href='{$item}'>";
        }
    }
    ?>
</head>
<body>
<?php include('page-loader.php'); ?>
