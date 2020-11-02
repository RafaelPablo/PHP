<?php

require_once('../Model/dbFunctions.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$register_user = register_user($username, $password);

if ($register_user) {
  header("Location: ../View/principal.php");
} else {
  header('Location: ../index.php?error=1');
}
