<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<!-- Menubar -->
<nav>
    <div class="nav-wrapper #d50000 red accent-4">
        <a href="index.php" class="brand-logo"><img src="Foto/Logo.jpeg"   width="170" height=65" </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">Home</a></li>
            <li><a href="Reserveren/reservering.php">Reserveren</a></li>
            <li class="active"><a href="">Contact</a></li>
        </ul>
    </div>
</nav>

<div class="container"> <!-- Centers the page. -->
    <div class="row">
        <div class="col s6">
            <h3>Openingstijden</h3>
            <strong>MAANDAG</strong> GESLOTEN <br>
            <strong>DINSDAG</strong> 09:00 - 18:00<br>
            <strong>WOENSDAG</strong> 09:00 - 18:00<br>
            <strong>DONDERDAG</strong> 09:00 - 21:00<br>
            <strong>VRIJDAG</strong> 09:00 - 18:00<br>
            <strong>ZATERDAG</strong> 09:00 - 18:00<br>
            <strong>ZONDAG</strong> GESLOTEN<br>

            <h3>Telefoon</h3>
            0252-226304<br>
            <i>Met of zonder afspraak</i><br>

            <h3>Social Media</h3>
            <b>Facebook</b> <br>
            <a href="https://www.facebook.com/KapsalonKaan/">Kapsalon Kaan</a>
        </div>
        <div class="col s6">
            <h3>Adres</h3>
            Oosthuisplein 2 <br>
            2215 VM VOORHOUT<br>
            <br>
            <img src="Foto/Haar.jpeg" alt="Mountain View" width="500" height="377">
        </div>
    </div>

    <br>
    <br>


</div>
</body>
<?php include_once 'Footer.html' ?>
</html>

