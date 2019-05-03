<?php

include_once 'dbh.inc.php';

$Heren   =   mysqli_real_escape_string($conn, htmlentities($_POST['H']));
$Dames   =   mysqli_real_escape_string($conn, htmlentities($_POST['D']));
$Kleuren =   mysqli_real_escape_string($conn, htmlentities($_POST['K']));
$Name    =   mysqli_real_escape_string($conn, htmlentities($_POST['Name']));
$Surname =   mysqli_real_escape_string($conn, htmlentities($_POST['Surname']));
$Email   =   mysqli_real_escape_string($conn, htmlentities($_POST['Email']));
$S       =   mysqli_real_escape_string($conn, htmlentities($_POST['Persoon']));
$Date    =   mysqli_real_escape_string($conn, htmlentities($_POST['date']));
$Time    =   mysqli_real_escape_string($conn, htmlentities($_POST['tijd']));


$sql = "INSERT INTO reserveren(heren, dames, kleuren, naam, achternaam, email, medewerker, datum, tijd)
VALUES('$Heren','$Dames','$Kleuren','$Name','$Surname','$Email','$S','$Date','$Time');";


mysqli_query($conn, $sql);

header("Location: ../Reserveren/Reserveren.Samengevat.php");

mysqli_real_escape_string($conn, $_POST['username']);