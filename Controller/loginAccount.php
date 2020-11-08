<?php

session_start();

require_once('../Model/dbFunctions.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$type = $_POST['teacher'];



$validated_user = validate_user($username, $password, $type);

if ($validated_user) {
  $_SESSION['username'] = $username;
  $_SESSION['password'] = $password;

  header("Location: ../View/principal.php");
  echo $type;
} else {
  header('Location: ../index.php?error=1');
}
