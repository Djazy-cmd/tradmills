<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="../public/css/style.css">
</head>
<body>
    <div class="main">
        <?php 

            require '../public/inc/header.php';

        ?>

        <?= $content; ?>
<?php require "../public/inc/footer.php";?>