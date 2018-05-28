<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Management</title>

    <link rel="stylesheet" href="https://bastemp.com/css/bastemp.css?ver=1.0.2">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://bastemp.com/js/bastemp.min.js?ver=1.1.2"></script>
</head>
<body class="section_top_center">
    <?php
        if(isset($_SESSION['name-user']))
            include_once("data/framework.php");
        else
            include_once("data/login.php");
    ?>
</body>
</html>