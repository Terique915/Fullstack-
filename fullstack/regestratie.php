<?php
session_start();
 require_once('config.php');


//regrestatie code

//hash password
function hashPassowrd($password){
    return $password_hash($password, PASSWORD_DEFAULT);
}
//Regestratie form
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=['confirmpassword'];

    //passowrd check
    if ($confirmpassword =! $password){
        echo"password does not match";
    }

    $hashpassword= hashPassowrd($password);
}
try {
    $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
    $stmt->execute(array(':username' => $username, ':password' => $hashedPassword));
    echo "User registered successfully.";ujh
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
}
?>





<!doctype html>
<html lang="en">
<head>
    <style>
        body{
            background-image: url("imagesfs/bungalowbc.jpg");
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="text" name="username" placeholder="Username"required><br>
    <input type="password" name="password" placeholder="Password"required><br>
    <input type="password" name="confirmpassword" placeholder="Confirm Password " required><br>
    <input type="submit" name="register" value="Register"><br>
</form>
</body>
</html>
