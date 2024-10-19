<?php

$targetDirectory = "uploads/";
@mkdir($targetDirectory, 0777, true);

$targetPath = $targetDirectory . basename($_FILES['file']['name']);

$name = basename($_FILES['file']['name']);
$randomName = rand(1000, 9999);
$targetPath = $targetDirectory . $randomName . $name;

if (move_uploaded_file($_FILES['file']['tmp_name'], $targetPath)) {
    echo json_encode([
      'error' => '',
      'success' => true,
      'message' => 'File uploaded successfully',
      'url' => $targetPath
    ]);
} else {
    echo json_encode([
        'error' => 'Upload failed',
        'success' => false,
        'message' => 'File could not be uploaded'
    ]);
}