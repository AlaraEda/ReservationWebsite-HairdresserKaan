<?php
$id= $_GET['id'];
include_once '../includes.user/dbh.inc.php';

$sql = "SELECT* FROM reserveren WHERE id=$id";

$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier</title>
</head>
<body>
<form action="../includes.user/Edit2.php?id=<?php echo $id; ?>" method="POST">
    <input type="text"    name="naam"       value= <?=$row['naam']?>>          <br>
    <input type="text"    name="achternaam" value=<?=$row['achternaam']?>>     <br>
    <input type="text"    name="email"      value=<?=$row['email']?>>          <br>
    <input type="text"    name="medewerker" value=<?=$row['medewerker']?>>     <br>

    <input type="text"    name="dames"      value=<?=$row['dames']?>>          <br>
    <input type="text"    name="heren"      value=<?=$row['heren']?>>          <br>
    <input type="text"    name="kleuren"    value=<?=$row['kleuren']?>>        <br>
    <input type="text"    name="date"       value=<?=$row['datum']?>>           <br>
    <input type="text"    name="time"       value=<?=$row['tijd']?>>           <br>

    <button type="submit" name="Submit" required>Submit</button>     <br>

    <!-- Als je een plaatje handmatig wilt uploaden verander dan type van text naar file-->

</body>
</html>

