<?php
$id= $_GET['id'];
include_once '../includes.user/dbh.inc.php';

$sql = "SELECT* FROM users WHERE id=$id";

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
<form action="../includes.admin/Edit2.Users.php?id=<?php echo $id; ?>" method="POST">
    <input type="text"    name="first_name"   value= <?=$row['first_name']?>>  <br>
    <input type="text"    name="last_name"    value=<?=$row['last_name']?>>    <br>
    <input type="text"    name="email"        value=<?=$row['email']?>>        <br>
    <input type="text"    name="username"     value=<?=$row['username']?>>     <br>
    <input type="text"    name="password"     value=<?=$row['password']?>>     <br>

    <button type="submit" name="Submit" required>Submit</button>     <br>

    <!-- Als je een plaatje handmatig wilt uploaden verander dan type van text naar file-->

</body>
</html>

