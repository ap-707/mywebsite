<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
    </style>
    <title>Login</title>
</head>

<body>

    <form action=”login_page.php” method="POST">

        <div class="container">
            <h1>SignIn</h1>
            <hr>
            <div class="ebox">
                <input type="email" class="email" name="email" placeholder="email">
            </div>
            <div class="pbox">
                <input type="password" class="password" name="password" placeholder="password">
            </div>
            <div class="btn">
                <a href="login_page.php"><button type="submit" class="sub_but" name="btn"> SignUp </button></a>
            </div>
            <p><b>Create new account</b> <a href="signUp.php" style="color:white"> Click here </a> </p>
        </div>

    </form>
</body>