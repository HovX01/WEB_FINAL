<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Color Admin | </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="stylesheet" href="admin-asset/css/app.min.css">
    <link rel="stylesheet" href="admin-asset/css/vendor.min.css">
    <?php
    if (isset($style) && $style->length > 0) {
        foreach ($style as $item) {
            echo "<link rel='stylesheet' href='{$item}'>";
        }
    }
    ?>
</head>
<body>
<?php include('page-loader.php'); ?>
