<?php
session_start(); //Functie die de sessie start
if (isset($_POST['submit'])) {
    include 'includes.user/dbh.inc.php';
    $uid = mysqli_real_escape_string($conn, htmlentities($_POST['username']));
    $pwd = mysqli_real_escape_string($conn, htmlentities($_POST['pwd']));

    //Error handLers
    if (empty($uid) || empty($pwd)) {                                                    //Als de input leeg is ga naar singup.page.
        header("Location: index.php?index=empty");
        exit();
    }else{                                                                              //Wanneer email en pw is ingevuld check of ze bestaan in database;
        $sql = "SELECT * FROM users WHERE username='$uid' OR email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck<1){                                                             //Minder dan 1 resultaat in database = error;
            header("Location: index.php?login=usernameInccorect");                // Uitkomst = error. Geen hint geven aan user wat er mis is. Dan kunnen ze gokken.
            exit();
        }
        else {                                                                          //Wanneer E-Mail input in database bestaat;
            if($row = mysqli_fetch_assoc($result)){                                     //Stop resultaten in array row.
                $hashedPwdCheck = password_verify($pwd,$row['password']);               //De-hash password in database & match input password met db password.
                if ($hashedPwdCheck == False){                                          //Matching fout.
                    header("Location: index.php?login=password");
                    exit();
                } elseif($hashedPwdCheck == true){                                      //Dit is een elseif omdat we beide tegelijk willen checken.

                    //Log the user in --> start een sessie:
                    $_SESSION['id'] = $row['id']; //naam van Session variabel is =
                    $_SESSION['first'] = $row['first_name'];
                    $_SESSION['last'] = $row['last_name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['uid'] = $row['username'];

                    header("Location:index.php?login=success");
                    exit();
                }
            }
        }
    }

} else {
    header ("Location: index.php?login=Error1");
    exit();
}