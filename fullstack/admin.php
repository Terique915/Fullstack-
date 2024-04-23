<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="admin.css">
    <title>Admin</title>
    <style>

    </style>
</head>
<body>

<div id="Namen">
    <h2>Voernamen Hier</h2>
    <div id="form">
     <h3>Bungalow</h3>
    <form>
        <input id="bungalownaam" type="text" >
    </form>
    <h3>Voorzieningen</h3>
    <form>
        <input id="voorzieningnaam" type="text" >
        <input id="voernaam" type="submit" value="Submit">
    </form>
    </div>

</div>

</body>
</html>

<?php
session_start();
require_once 'config.php';

?>