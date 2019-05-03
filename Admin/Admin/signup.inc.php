<?php
if (isset($_POST['submit'])){
//Submit klikken = code uitvoeren:
    include_once 'includes.user/dbh.inc.php';

    $first  = mysqli_real_escape_string($conn, htmlentities($_POST['first']));
    $last   = mysqli_real_escape_string($conn, htmlentities($_POST['last']));
    $email  = mysqli_real_escape_string($conn, htmlentities($_POST['email']));
    $username = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $password = mysqli_real_escape_string($conn, htmlentities($_POST['password']));
    //De functie mysqli_real_escape_string zorgt ervoor dat er geen query ingetypt kan worden door user.
    //Error Handlers
    if(empty($first)|| empty($last) || empty($email)||empty($username)||empty($password)){           //Als de input leeg is ga naar singup.page.
        header("Location: signup.php?signup=Empty");
        exit();                                                                                      //De exit is er zodat de code niet perongelijk de else statement uitvoerd.
    } else {                                                                                         //Else check if input characters are valid.
        if(!preg_match("/^[a-zA-Z]*$/",$first)||!preg_match("/^[a-zA-Z]*$/",$last)){   //Bestaat de input uit andere char's dan(a-zA-Z): doe code.
            header("Location: signup.php?signup=invalid");
            exit();
        }
        else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){                                     //Als E-Mail niet bestaat; run code
                header("Location: signup.php?signup=email");
                exit();
            }
            else{                                                                                   //Is de ingetypte mail al in de database?
                $sql = "SELECT * FROM users WHERE username='$username'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);                                            //neemt de result query en kijkt of we rows hebben gevodnen in de database.
                if ($resultCheck>0){                                                                //Als door user input mail al bestaat: run code;
                    header("Location: signup.php?signup=UserIsTaken");
                    exit();
                }
                else {                                                                              //Als de email niet bezet is...:
                    $hashedpassword = password_hash($password, PASSWORD_DEFAULT);              //Hash-functie. Verberg password met de methode;default.
                    $sql = "INSERT INTO users (first_name, last_name, email, username, password) 
                            VALUES ('$first', '$last','$email','$username','$hashedpassword');";     //Insert input into the database.
                    mysqli_query($conn,$sql);                                                                 //run the code;
                    header("Location: includes.user/Users.Home.php?signup=succes");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: signup.php?URLGetypt");                                             //Als de mensen alleen maar de url hebben overgetypt sturen we ze direct terug naar de signup page.
    exit();                                                                                        //Functie stopt de rest van de code van running.
}

//Je kan ook latenchecken of een password grote of kleine letters heeft etc.