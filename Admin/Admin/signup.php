<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up</title>
</head>
<body>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Signup</h2>
        <form class="signup-form" action="signup.inc.php" method="POST">
            <input type="text"     name="first"    placeholder="Firstname"> <br>
            <input type="text"     name="last"     placeholder="Lastname"> <br>
            <input type="text"     name="email"    placeholder="E-mail"> <br>
            <input type="text"     name="username"      placeholder="Username"> <br>
            <input type="password" name="password"      placeholder="Password"> <br>
            <button type="submit"  name="submit">Sign up</button>
        </form>
    </div>
</section>
</body>
</html>

