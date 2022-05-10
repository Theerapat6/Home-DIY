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
</head>
<body>
    <h1>Register</h1>
    <form>
        <label>user id</label>
        <input type="text" name="user_id">
        <label>email</label>
        <input type="text" name="user_email">
        <label>password</label>
        <input type="password" name="user_pass">
        <label>confirm password</label>
        <input type="password" name="pass_con">
    </form>
</body>
</html>