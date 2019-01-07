<?php
require 'Auth.php';   

$auth = new Auth();

if (!$auth->hashUser()) {
    header('Location: /login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Привет, пользователь!</h1>
    <a href="/logout.php">Выйти</a>
</body>
</html>