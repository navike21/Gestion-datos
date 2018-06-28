<?php
    $sesion = $_SESSION['idusuario'];

    $nombreSesion = explode("+", $sesion);

    $rutaScreen = "data/screens/";
?>
<header class="w_100 section_middle_justify">
    <h1>Unnique Records</h1>
    <ul class="section_middle_right">
        <li>Hola, <?php echo $nombreSesion[1];?></li>
        <li> <a href="">Log out</a> </li>
    </ul>
</header>
<nav>
    <ul class="w_100 section_top_center">
        <li> <a data-screen="0" class="activeScreen">Home</a> </li>
        <li> <a data-screen="1">Subscribers</a> </li>
        <li> <a data-screen="2">Hair Professionals & Salons Register</a> </li>
        <li> <a data-screen="3">Become a Distributor</a> </li>
        <li> <a data-screen="4">Contact Inbox</a> </li>
    </ul>
</nav>
<section class="wrapp">
    <div class="screens section_middle_center">
        Welcome to the Unnique records
    </div>
    <div class="screens section_top_center">
        <?php include_once($rutaScreen."/suscribers.php"); ?>
    </div>
    <div class="screens section_top_center">
        <?php include_once($rutaScreen."/hair-professional.php"); ?>
    </div>
    <div class="screens">Become a distributor</div>
    <div class="screens">Contact</div>
</section>