<?php
session_start();
require_once('config.php');


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="fullstack.css">
</head>
<body>
<h1></h1>
<section>

    <div class="form">
        <form method="post">
            <h2>Sign In</h2>
            <input class="user" type="text" name="username" id="username" placeholder="Userame" required><br><br>
            <input class="pass" type="password" name="password" id="password" placeholder="Password" required><br><br>
            <input class="submit" type="submit" name="Login" value="Login"  placeholder="Login">
        </form>
    </div>
</section>
</body>
</html>