<?php
include_once '../includes.user/dbh.inc.php';

$id =$_GET["id"];

$first_name =   $_POST['first_name'];
$last_name = $_POST['last_name'];
$email =  $_POST['email'];
$username =   $_POST['username'];
$password =   $_POST['password'];


$sql = "UPDATE persmed SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `username`='$username','password'='$password'
        WHERE id=$id ";

mysqli_query($conn, $sql);

header("Location: ../includes.user/Users.Home.php");





