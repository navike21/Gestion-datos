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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"/>
    
    <link rel="stylesheet" href="plugins/slick-1.8.0/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick-1.8.0/slick/slick-theme.css">
    <link rel="stylesheet" href="css/styles.min.css?ver=1.1.0">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://bastemp.com/js/bastemp.min.js?ver=1.1.2"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script src="plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="js/ready.min.js?ver=1.0.7" charset="utf-8"></script>
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
