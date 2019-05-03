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
                <div class="determinate black" style="width: 100%"></div>
            </div>
        </div>
    </div>


    <!-- Reserveer-menubar -->
    <div class="row">
        <div class="card-panel hoverable col s9 offset-s2">
            <div class="row">
                <div class="container">
                    <ul class="pagination">
                        <div class="col pull-s3"><li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li></div>
                        <div class="col push-s3"><li class="active #dd2c00 deep-orange accent-4"><a href="#!">Einde</a></li> </div>
                        <div class="col push-s9"><li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 push-s3">
            <br>
            <br>
            <i>Uw stappen zijn voltooid...<i>
        </div>
        <div class="col s12 push-s6">
            <i><b>&...</b></i>
        </div>
        <div class="col s12 push-s7">
            uw reservering is doorgestuurd...
        </div>
    </div>





</div>

</body>
</html>