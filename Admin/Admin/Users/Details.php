<?php
//Require music data to use variable in this file
require_once "../includes.user/dbh.inc.php";
$id=$_GET['id'];
//Get the result set from the database with a SQL query

$reserveren = "SELECT* FROM reserveren WHERE id=$id";

$result = $conn->query($reserveren);

$row = mysqli_fetch_array($result);

//Loop through the result to create a custom array


//Close connection
mysqli_close($conn);


?>


    <strong>Naam:</strong> <?=$row['naam']?><br>
    <strong>Achternaam:</strong> <?=$row['achternaam']?> <br>
    <strong>Email:</strong>      <?= $row['email']?> <br>
    <strong>Gekoze Medewerker:</strong> <?= $row['medewerker']?> <br>
    <strong>Datum:</strong> <?= $row['datum']?><br>
    <strong>Tijd:</strong> <?= $row['tijd']?><br>

    <br>
    <strong>Behandeling:</strong><br>
    <?= $row['kleuren']?> <?= $row['heren']?><?= $row['dames']?>

