<?php

session_start();

if (!isset($_SESSION['username'])) {
  header('Location: ../index.php?error=1');
}

include_once('../View/menu.php');

$_SESSION['username'];
$_SESSION['password'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>

  <button type="button" style="text-align:center;" class="btn btn-outline-primary" onclick="location.href = '../Controller/logoutAccount.php'">Logout</button>

</body>

</html>