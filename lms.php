<?php
session_start();
if(!isset($_SESSION['loggedin'])){
    header("location:login.php");
    
}else{
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WELCOME TO THE LMS</h1>
</body>
</html>