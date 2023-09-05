<?php
$u = 'admin';
$p = 'pass@123';
if (isset($_REQUEST['username']) && isset($_REQUEST['password'])) {
    if ($u == $_REQUEST['username'] && $p == $_REQUEST['password']) {
        session_start();
        header("location:lms.php");
        $_SESSION['loggedin'] = true;
    } else {
        echo 'Incorrect UserName or Password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="box">
            <form action="login.php" method="post">
                <div class="box-login" id="login">

                    <div class="top-header">
                        <h3>Login Now</h3>
                        <small>We are happy to have you back.</small>
                    </div>
                    <div class="input-group">
                        <div class="input-field">
                            <input type="text" class="input-box" name="username" required>
                            <label for="username">User Name</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input-box" name="password" required>
                            <label for="Password">Password</label>
                        </div>

                        <div class="input-field">
                            <input type="submit" class="input-submit" value="Sign In">
                        </div>
                        <div class="forgot">
                            <a href="#">Forgot password?</a>
                        </div>
                    </div>
            </form>
        </div>
</body>

</html>

