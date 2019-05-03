<!DOCTYPE html>
<html>
<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>



<!-- HOOFD MENU-BAR -->

<nav>
    <div class="nav-wrapper  #d50000 red accent-4">
        <a href="../index.php" class="brand-logo"><img src="../Foto/Logo.jpeg"   width="170" height=65" </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="../index.php">Home</a></li>
            <li class="active"><a href="Reserveren.Behandeling.php">Reserveren</a></li>
            <li><a href="../Contact.php">Contact</a></li>
        </ul>
    </div>
</nav>

<br>
<div class="container">

    <!-- Loading bar -->
    <div class="row">
        <div class="col s7 offset-s3">
            <div class="progress">
                <div class="determinate black" style="width: 70%"></div>
            </div>
        </div>
    </div>

    <!-- Reserveer-menubar -->
    <div class="row">
        <div class="card-panel hoverable col s9 offset-s2">
            <div class="row">
                <ul class="pagination">
                    <div class="col s1"><li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li></div>
                    <div class="col s1"><li class="disabled"><a href="#!">Behandeling</a></li></div>
                    <div class="col push-s1"><li class="disabled"><a href="Reserveren.Persoonlijk&Medewerker.php">Persoonlijk & Medewerker</a></li> </div>
                    <div class="col push-s1"><li class="active #dd2c00 deep-orange accent-4"><a href=#!">Datum & Tijd</a></li></div>
                    <div class="col push-s1"><li class="disabled"><a href="#!">Samengevat</a></li></div>
                    <div class="col push-s1"><li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li></div>
                </ul>
            </div>
        </div>
    </div>
    <!-- Components, collections -->
    <div class="row">
        <div class="col s9 offset-s2">
            <ul class="collection">
                <form action="../includes/Datum&Tijd.inc.php" method="POST">
                    <div class="row">
                        <!--Calender -->
                        <div class="col s4 push-s1">
                            <p><strong>Datum:</strong><input type="text" id="datepicker" name="date"></p>
                        </div>

                        <!--Tijd -->
                        <div class="col s4 push-s2">
                            <p><strong>Time:</strong><input type="text" class="timepicker" name="tijd"></p>
                        </div>

                    <div class="row">
                    <!--Verstuur -->
                        <div class="col s4 push-s1">
                            <input type="submit">
                        </div>
                    </div>

                    </div>
                </form>
            </ul>
        </div>
    </div>

</div>

</body>
</html>




<?php include 'Time.php'?>

<?php include "calender2.php";?>
