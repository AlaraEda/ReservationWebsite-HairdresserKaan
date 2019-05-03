<?php

include_once "dbh.inc.php";

$id= $_GET['id'];

$sql = "DELETE FROM reserveren WHERE id = $id";
mysqli_query($conn, $sql);

header("Location: ../index.php");
