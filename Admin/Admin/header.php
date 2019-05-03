<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administratie</title>
</head>
<body>
<header>

        <div class="main-wrapper">
            <div class="nav-login">
                <br>
                <?php
                    if (isset($_SESSION['id'])){                                             //Wanneer je bent ingelogd-->
                        echo '
                    <form action="logout.inc.php" method="POST">
                    <button class="btn" type="submit" name="submit">Logout</button>
                    </form>';


                    }
                    else{
                        echo '  <form action="login.inc.php" method="POST">             <!--Anders log in -->
                                <input type="text"     name="username" placeholder="Username/e-mail">
                                <input type="password" name="pwd" placeholder="password">
                                <button type="submit"  name="submit">Login</button>
                                </form>
                                ';
                    }
                ?>
            </div>
        </div>

</header>
</body>
</html>