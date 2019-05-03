<?php
include_once 'dbh.inc.php';

    $naam       = $_POST['first_name'];
    $achternaam = $_POST['last_name'];
    $email      = $_POST['email'];
    $medewerker = $_POST['medewerker'];
    $dames      = $_POST['dames'];
    $heren      = $_POST['heren'];
    $kleuren    = $_POST['kleuren'];
    $date       = $_POST['date'];
    $time       = $_POST['time'];

$sql = "INSERT INTO reserveren (heren, dames, kleuren, naam, achternaam, email, medewerker, datum, tijd) 
         VALUES ('$heren','$dames','$kleuren''$naam','$achternaam','$email','$medewerker','$date','$time');";

mysqli_query($conn, $sql);



header("Location: ../index.php?Success");

