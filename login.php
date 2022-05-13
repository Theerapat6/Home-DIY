<?php 

    session_start();
    include('config.php');
    include('function.php');

    $msg = '';

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $user_id = $_POST['user_id'];
      $user_pass = $_POST['user_pass'];

      if(!empty($user_id) && !empty($user_pass))
      {
        //read from database
        $query = "SELECT * FROM users WHERE user_id = '$user_id' OR user_email = '$user_id' LIMIT 1";
        $result = mysqli_query($conn, $query);
        
        if($result)
        {
          if(mysqli_num_rows($result) > 0)
          {
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['user_pass'] === $user_pass)
            {
              $_SESSION['user_id'] = $user_data['user_id'];
              echo "<script>alert('Login successfully!')</script>";

              header('Location: user_interface.php');
              die;
            }else
            {
              echo "<script>alert('Wrong password or ID')</script>";
            }
          }else
          {
            echo "<script>alert('Wrong password or ID')</script>";
          }
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
        <h1>Login</h1>

        <form method="post">

          <div class="txt_field">
            <input type="text" name="user_id">
            <span></span>
            <label>Username or Email</label>
          </div>

          <div class="txt_field">
            <input type="password" name="user_pass">
            <span></span>
            <label>Password</label>
          </div>

          <input type="submit" value="Login">
          <div class="signup_link">
            <a href="register.php">Sign up</a>
          </div>
        </form>
      </div>
</body>
</html>