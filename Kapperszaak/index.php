<?php
require_once('includes/settings.php');
require_once('includes/classes/Flickr.php');

//Create instance of class to use for communicating with Flickr webservice
$flickr = new Flickr("d1b0f085647e1d5bc1c775ba1b0e1fa3", "28543dd73e6a8087"); //flickr key, flickr secret <<-- bewerkennn !!
$data = $flickr->search('Hair Style'); // woord voor plaatje wat je wil zoeken <<-- bewerkennn !!

$text = $data["photos"]["photo"][0]["title"];

//Check to see if the server connects properly
//$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$connection ->query("SELECT " ) = $connection = new mysqli()

?>

<?php
foreach ($data['photos']['photo'] as $photo) {
    $images[] = 'http://farm' . $photo['farm'] . '.static.flickr.com/' . $photo['server'] . '/' . $photo['id'] . '_' . $photo['secret'] . '.jpg';
}
?>






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
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="Reserveren/reservering.php">Reserveren</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>(A
        </div>
    </nav>



<!-- Carousel -->
    <div class="carousel">
        <a class="carousel-item" href="#one!"><img src="Foto/Kapper.jpeg"></a>
        <a class="carousel-item" href="#two!"><img src="Foto/kapperlinks.jpeg"></a>
        <a class="carousel-item" href="#three!"><img src="Foto/Lounge.jpeg"></a>
        <a class="carousel-item" href="#four!"><img src="Foto/Woonkamer.jpeg"></a>
        <a class="carousel-item" href="#five!"><img src="Foto/Folder.jpeg"></a>
        <!-- Flicker API afbeeldingen -->
        <?php foreach($images as $image) : ?>

            <img class= "carousel-item" src="<?= $image; ?>" alt="" style = "height:180px; width:230px">

        <?php endforeach ;?>
    </div>

    <script>
        $(document).ready(function(){
            $('.carousel').carousel();
        });
    </script>




<div class="container"> <!-- Centers the page. -->

    <div class="card-panel black lighten-5 z-depth-1">
        <div class="row valign-wrapper"> <!-- tekst onder elkaar -->
            <div class="row">
                <div class="col s12 push-s5 white-text">
                    <h3>About</h3>
                    <br><br>
                </div>

                <div class="col s6 white-text">
                    <strong>Wat is het achtergrond verhaal?</strong><br><br>
                    De werknemers in Kapsalon Kaan bestaan voornamelijk uit de eigenaar: “Zeki Arisoy” en de medewerker: “Suzan van Elk”. Samen verdelen deze twee het kappers werk en houden zodoende de kapsalon in stand.
                    Kapsalon Kaan focust zich op het knippen van heren en dames maar ook die van kinderen. Hun specialisaties bestaan uit het permanent verven van haar en daar extensions aan brengen.

                </div>
                <div class="col s6">
                  <span class="white-text">
                      <div >
<strong>Wat is hun huisstijl?</strong><br><br>

                    Hun huisstijl bestaat voornamelijk uit de kleuren zwart en rood wat de kapsalon een moderne sfeer geeft. Ze richten zichzelf veel op netheid en overzichtelijkheid en zijn erop gefocust dit ook uit te stralen naar hun klanten.

                      </div>
                  </span>
                </div>
            </div>
        </div>
    </div>

<br>
    <br>

</div>
<?php include_once 'Footer.html' ?>
</body>
</html>
