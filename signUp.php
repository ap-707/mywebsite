<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
    </style>
    <title>SignUp</title>
</head>

<body>

    <form action=”login_page.php” method="POST">

        <div class="container">
            <h1>SignUp here</h1>
            <hr>
            <div class="fnlname">
                <input type="text" class="name" name="fname" placeholder="First Name">
                <input type="text" class="name" name="lname" placeholder="Last Name">
            </div>
            <div class="ebox">
                <input type="email" class="email" name="email" placeholder="email">
                <input type="mobile" class="mobile" name="mobile" placeholder="Mobile">
            </div>
            <div class="passbox">
                <input type="password" class="password" name="password" placeholder="password">
                <input type="password" class="password" name="re-pass" placeholder="Re-enter password">
            </div>
            <div class="btn">
                <a href="login_page.php"><button type="submit" class="sub_but" name="btn"> SignUp </button></a>
            </div>
            <p><b>Have an account?</b> <a href="login_page.php" style="color:white">  Click here </a> </p>
        </div>

    </form>
</body>

<!-- php code -->

<?php


include 'connection.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ( isset($_POST['btn']) and $_POST['password'] == $_POST['re_pass']) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $passs = $_POST['password'];
        $re_pass = $_POST['re_pass'];
        $insert_query = " INSERT INTO `register_users` (`fname`, `lname`, `email`, `mobile`, `password`) VALUES ('ashish', 'pipaya', 'abc@gmail.com', '1111111111', '111')";

        $apply_query = mysqli_query($conn, $insert_query);


        if ($apply_query) {
?>
            <script>
                alert("Registretion Successfully ");
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Data Not Inserted");
            </script>
        <?php
            header('Location:http://localhost/form/login_page.php');
        }
    } else {
        ?>
        <script>
            alert("Please Re-Enter Same Password");
        </script>
<?php
    }
} else {
    echo "Somethig went wrong!";
}


?>



</html>