<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


</head>



<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>



<!-- Menubar -->
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
                        <div class="col push-s3"><li class="active #dd2c00 deep-orange accent-4"><a href="#!">Reserveren</a></li> </div>
                        <div class="col push-s9"><li class="disabled"><a href="#!"><i class="material-icons">chevron_right</i></a></li></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- collectie keuze -->
    <div class="row">
        <div class="col s9 offset-s2">

            <form action="../includes/reservering.inc.php" method="POST">
                <div class="row">
                    <div class="row">
                        <!--Name -->
                        <div class="input-field col s6">
                            <input name="Name" id="first_name" type="text" class="validate">
                            <label for="first_name">First Name</label>
                        </div>
                        <!--Surname-->
                        <div class="input-field col s6">
                            <input name="Surname" id="last_name" type="text" class="validate">
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>


                    <div class="row">
                        <!-- Email-->
                        <div class="input-field col s6">
                            <input name="Email" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>

                        <script>
                            $(document).ready(function() {
                                $('select').material_select();
                            });
                        </script>

                        <!-- Medewerker -->
                        <div class="input-field col s6">

                            <select name="Persoon" class="icons">
                                <option value="X" disabled selected>Choose your option:</option>
                                <option value="Suzanne van Elk" data-icon="../Foto/Suzan.jpg" class="left circle">Suzanne van Elk</option>
                                <option value="Zeki Arisoy" data-icon="../Foto/Zeki.jpg" class="left circle">Zeki Arisoy</option>
                                <option value="Random" data-icon="../Foto/unknown-person.png" class="left circle">Random Keuze</option>
                            </select>
                        </div>

                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
<!----------------------------------------------------------------------------------------------------------------->
                        <!--Calender -->
                        <div class="col s6">
                            <p><strong>Datum:</strong><input type="text" id="datepicker" name="date"></p>
                        </div>

                        <!--Tijd -->
                        <div class="col s6">
                            <p><strong>Time:</strong><input type="text" class="timepicker" name="tijd"></p>
                        </div>

                        <script>
                            $( function() {
                                $("#datepicker").datepicker();
                            } );
                        </script>

                        <script>
                            $('.timepicker').pickatime({
                                default: 'now', // Set default time: 'now', '1:30AM', '16:30'
                                fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
                                twelvehour: false, // Use AM/PM or 24-hour format
                                donetext: 'OK', // text for done-button
                                cleartext: 'Clear', // text for clear-button
                                canceltext: 'Cancel', // Text for cancel-button
                                autoclose: false, // automatic close timepicker
                                ampmclickable: true, // make AM PM clickable
                                aftershow: function(){} //Function for after opening timepicker
                            });
                        </script>


                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
<!----------------------------------------------------------------------------------------->

                        <div class="col s2">
                            <strong>Kies één optie:</strong>
                        </div>
                        <br><br>
                        <script>
                            $(document).ready(function() {
                                $('select').material_select();
                            });
                        </script>
                        <!-- Links -->

                        <br>

                        <div class="col s4">
                            <strong>Heren</strong>
                            <br>
                            <select name="H">
                                <option value="">Choose your option</option>
                                <option value="Heren: Knippen">Heren knippen € 15,-</option>
                                <option value="Heren: Baard scheren">Baard scheren € 12,-</option>
                                <option value="Heren: Wassen & knippen">Heren Wassen & knippen € 18,-</option>
                                <option value="Heren: 65+ Knippen">65+ Knippen € 15,-</option>
                                <option value="Kinderen: t/m 11 jaar">T/m 11 jaar €12,50,-</option>
                                <option value="Iets anders">Andere Optie</option>
                            </select>
                        </div>
                        <div class="col s4">
                            <strong>Dames</strong>
                            <br>
                            <select name="D">
                                <option value="">Choose your option</option>
                                <option value="Dames: Knippen">Dames Knippen € 18,-</option>
                                <option value="Dames: Wassen, knippen & drogen">Wassen,knippen & drogen € 24,-</option>
                                <option value="Dames: Wassen, knippen & fohnen">Wassen,Knippen & fohnen € 32,-</option>
                                <option value="Dames: Wassen & fohnen">Wassen & fohnen € 22,-</option>
                                <option value="Kinderen: t/m 11 jaar">T/m 11 jaar €12,50,-</option>
                                <option value="Iets anders">Andere Optie</option>
                            </select>
                        </div>

                        <!--Rechts -->
                        <div class="col s4">
                            <strong>Kleuren</strong>
                            <br>

                            <select name="K">
                                <option value="">Choose your option</option>
                                <option value="Kleuren: Uitgroei">Uitgroei € 35,-</option>
                                <option value="Kleuren: Uitgroei met Highlights">Uitgroei met Highlights € 45,-</option>
                                <option value="Kleuren: Uitgroei met lengte en punten">Uitgroei met lengte en punten €50,-</option>
                                <option value="Kleuren: Hele Highlight">Hele highlight €50,-</option>
                                <option value="Kleuren: Deel Highlight">Deel highlight €40,-</option>
                                <option value="Kleuren: Haar Masker">Haar Masker €4,95-</option>
                                <option value="Kleuren: Epileren">Epileren €8,-</option>
                                <option value="Kleuren: Wenkbrauwen verven">Wenkbrauwen verven €8,-</option>
                                <option value="Kinderen: t/m 11 jaar">T/m 11 jaar €12,50,-</option>
                                <option value="Iets anders">Andere Optie</option>
                            </select>

                            <br>
                        </div>
                    <div class="col s3 push-s5">
                        <input type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>

    </div>


</div>

</body>
</html>
