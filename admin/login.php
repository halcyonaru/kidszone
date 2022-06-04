<?php include('../config/constants.php'); ?>

<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../css/admin.css">

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Abel&family=Dosis:wght@200;300;400;500;600;700;800&display=swap');

        * {
            font-family: "Poppins", sans-serif;
            border-radius: 6px;
            background-image: url('image/bg-photo.jpg');
        }
        h1 {
            margin-bottom: 16px;
        }

        input {
            height: 40px;
            width: 160px;
            font-family: "Dosis", sans-serif;
            margin-top: 7px;
        }

        .btn-primary {
            width: 115px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition: 0.33s;
        }
    </style>
</head>

<body>

    <div class="login">
        <h1 class="text-center">Sign in</h1>

        <?php
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-message'])) {
            echo $_SESSION['no-login-message'];
            unset($_SESSION['no-login-message']);
        }


        ?>
        <!-- <br><br> -->



        <!-- Login Form Starts Here -->
        <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder="Username"> <br><br>

            Password: <br>
            <input type="password" name="password" placeholder="Password"> <br><br>

            <input type="submit" name="submit" value="OK" class="btn-primary">
        </form>

        <!-- Login Form Ends Here -->

        <!-- <p class="text-center">Created By - <a href="#">Pham Quoc Thang</a></p> -->
    </div>








</body>

</html>

<?php

//Check whether the Submit Button is Clicked ot Not
if (isset($_POST['submit'])) {
    //Process for Login
    //1. Get the Data from Login form
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    //2. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";

    //3. Execute the Query
    $res = mysqli_query($conn, $sql);

    //4. Count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        //User Available and Login Success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $username; //To check whether the user is logged in or not and logout will unset it

        //Redirect to Home Page/Dashboard
        header('location:' . SITEURL . 'admin/manage-admin.php');
    } else {
        //User Available and Login Fail
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        //Redirect to Home Page/Dashboard
        header('location:' . SITEURL . 'admin/login.php');
    }
}
?>