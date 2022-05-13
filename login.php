<?php 

    session_start();
    include('config.php');
    include('function.php');

    $user_data = check_login($con)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/css/login_style.css">

</head>
<body>

    <div class="center">
        <h1>Login</h1>

        <form method="post">

          <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Username</label>
          </div>

          <div class="txt_field">
            <input type="text" required>
            <span></span>
            <label>Email</label>
          </div>

          <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Password</label>
          </div>

          <div class="txt_field">
            <input type="password" required>
            <span></span>
            <label>Confirm password</label>
          </div>
          
          <input type="submit" value="Login">
          <div class="signup_link">
            <a href="#">Signup</a>
          </div>
        </form>
      </div>
</body>
</html>