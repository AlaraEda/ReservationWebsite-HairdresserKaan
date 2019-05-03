<?php
include_once '../includes.user/dbh.inc.php';

    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];



$sql = "INSERT INTO users (first_name, last_name, email, username, password) 
         VALUES ('$first_name','$last_name','$email','$username','$password');";

mysqli_query($conn, $sql);

header("Location: ../includes.user/Users.Home.php?Success");

