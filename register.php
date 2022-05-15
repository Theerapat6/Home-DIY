<?php

    session_start();
    include('config.php');
    include('function.php');

    $msg = '';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $user_id = $_POST['user_id'];
      $user_email = $_POST['user_email'];
      $user_pass = $_POST['user_pass'];
      $user_con = $_POST['user_con'];

      if(!empty($user_id) && !empty($user_email) && !empty($user_pass) && !empty($user_con) && !is_numeric($user_email))
      {
        
        //save to data base
        $query = "INSERT INTO users (user_id,user_email,user_pass) VALUES ('$user_id','$user_email','$user_pass')";
        $query2 = "SELECT * FROM users WHERE user_email = '$user_email' OR user_id = '$user_id'";

        $result_check = mysqli_query($conn, $query2);
        $user_data = mysqli_fetch_assoc($result_check);
        
        if(isset($user_data['user_email']) != $user_email)
        {
          if($user_pass == $user_con)
          {
            mysqli_query($conn, $query);
            echo "<script>alert('Successfully register! You can')</script>";
          }else
          {
            $msg = 'Password is not equal!';
          }          
        }else
        {
          echo "<script>alert('Already email or id')</script>";
        }
        
      }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="login_style.css">

</head>
<body>

    <div class="center">
        <h1>Register</h1>

        <form method="post">

          <div class="txt_field">
            <input type="text" name="user_id">
            <span></span>
            <label>Username</label>
          </div>

          <div class="txt_field">
            <input type="text" name="user_email">
            <span></span>
            <label>Email</label>
          </div>

          <div class="txt_field">
            <input type="password" name="user_pass">
            <span></span>
            <label>Password</label>
          </div>

          <div class="txt_field">
            <input type="password" name="user_con">
            <span></span>
            <label>Confirm password</label>
          </div>
          <p><?php echo $msg?></p>
          
          <input type="submit" value="Register">
          <div class="signup_link">
            <a href="login.php">Login now</a>
          </div>
        </form>
      </div>
</body>
</html>