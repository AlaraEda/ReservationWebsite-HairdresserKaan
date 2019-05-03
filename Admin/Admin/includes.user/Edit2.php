<?php
include_once 'dbh.inc.php';

$id =$_GET["id"];

$naam =       $_POST['naam'];
$achternaam = $_POST['achternaam'];
$email =      $_POST['email'];
$medewerker = $_POST['medewerker'];

$dames =      $_POST['dames'];
$heren =      $_POST['heren'];
$kleuren =    $_POST['kleuren'];
$time =       $_POST['time'];
$date =       $_POST['date'];

//`time`='$time', `date`='$date'

$sql = "UPDATE reserveren SET `heren`='$heren',`dames`='$dames',`kleuren`='$kleuren',`naam`='$naam', `achternaam`='$achternaam', `email`='$email', `medewerker`='$medewerker',`datum`='$date',`tijd`='$time'
        WHERE id=$id ";


mysqli_query($conn, $sql);


header("Location: ../index.php");





