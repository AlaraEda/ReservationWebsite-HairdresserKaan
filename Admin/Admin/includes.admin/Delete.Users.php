<?php

include_once "../includes.user/dbh.inc.php";

$id= $_GET['id'];

$sql = "DELETE FROM users WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: ../includes.user/Users.Home.php");
