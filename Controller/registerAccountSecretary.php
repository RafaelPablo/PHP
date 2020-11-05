<?php

require_once('../Model/dbFunctions.php');

$name = $_POST['name'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$register_user = register_user_secretary($name, $username, $password);

if ($register_user) {
  header('Location: ../index.php?error=2');
}
