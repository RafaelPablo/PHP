<?php

session_start();

require_once('../Model/dbFunctions.php');

$username = $_POST['username'];
$password = md5($_POST['password']);

$validated_user = validate_user($username, $password);

if ($validated_user) {
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

  header("Location: ../View/principal.php");
} else {
  header('Location: ../index.php?error=1');
}
