<?php

$targetDirectory = "uploads/";
@mkdir($targetDirectory, 0777, true);

$fileExtension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$targetPath = $targetDirectory. uniqid() . '_' . time() . '.' . $fileExtension;

header('Content-Type: application/json');
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