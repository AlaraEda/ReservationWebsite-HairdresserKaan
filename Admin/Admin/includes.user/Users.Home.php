<?php
//Require music data to use variable in this file
require_once "../includes.user/dbh.inc.php";
//include_once "Musicpage.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

//Loop through the result to create a custom array
$Gegevens= [];
while ($row = mysqli_fetch_assoc($result)) {
    $Gegevens[] = $row;
}
//Close connection
mysqli_close($conn);

?>
<!doctype html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../../js/materialize.min.js"></script>


    <div class="container"> <!-- Centers the page. -->
        <br>
        <div class="row">
            <div class="col s3">
                <a href="../index.php"><i class="small material-icons">arrow_back</i>Klanten</a>
            </div>
            <div class="col s3 push-s7">
                <a href="../signup.php">Voeg Admin Toe<i class="small material-icons">add</i></a>
            </div>
        </div>


        <div class="card-panel teal lighten-2"></div>
        <table class="highlight">
            <thead>
            <tr>
                <th>#</th>
                <th>Naam</th>
                <th>Achternaam</th>
                <th>Email</th>
                <th>Username</th>
                <th>Password</th>
                <td><a id="scale-demo" href="#!" class="btn-floating btn-small scale-transition scale-in cyan"><i class="material-icons">edit</i></a></td>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($Gegevens as $key => $gegeven) { ?>
                <tr>
                    <td><?= $key + 1?></td>
                    <td><?= $gegeven['first_name']; ?></td>
                    <td><?= $gegeven['last_name']; ?></td>
                    <td><?= $gegeven['email']; ?></td>
                    <td><?= $gegeven['username']; ?></td>
                    <td><?= $gegeven['password']; ?></td>
                    <td><a href="../Admin/Edit.Users.php?id=<?= $gegeven['id']; ?>">Edit</a></td>
                    <td><a href="../includes.admin/Delete.Users.php?id=<?= $gegeven['id']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
    <div/>
</body>
</html>