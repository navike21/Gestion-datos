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
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700|Questrial" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.min.css?ver=1.0.5">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://bastemp.com/js/bastemp.min.js?ver=1.1.2"></script>
    <script src="js/ready.min.js?ver=1.0.5" charset="utf-8"></script>
</head>
<body class="section_middle_center full_min_h">
    <?php
        // echo md5("1234567890");
        if(isset($_SESSION['idusuario']))
            include_once("data/framework.php");
        else
            include_once("data/login.php");
    ?>
    <input id="success_frm" type="hidden">
</body>
</html>
