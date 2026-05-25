<?php require_once __DIR__ . '/../auth/check-auth.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | CA Firm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/ca-website/admin/assets/css/admin.css">
</head>
<body class="bg-light">
<div class="d-flex">
<?php require_once __DIR__ . '/sidebar.php'; ?>
    <div class="flex-grow-1" style="margin-left: 260px; min-height: 100vh;">
        <div class="container-fluid p-4">