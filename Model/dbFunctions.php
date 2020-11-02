<?php

require_once('../Model/dbConnection.php');

function validate_user($username, $password)
{
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $dbObject = new db();
  $link = $dbObject->sql_connection();

  $sql = "SELECT USERNAME, PASSWORD FROM teacher WHERE USERNAME='$username' AND PASSWORD='$password'";

  $result_select_db = mysqli_query($link, $sql);

  if ($result_select_db) {
    $password_db = mysqli_fetch_array($result_select_db);
    if (isset($password_db['PASSWORD'])) {
      return true;
    }
  } else {
    return false;
  }
}

function register_user_teacher($name, $username, $password)
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $dbObject = new db();
  $link = $dbObject->sql_connection();

  $username_already_exits =  false;

  $sql = "SELECT * FROM teacher WHERE USERNAME='$username'";

  if ($result = mysqli_query($link, $sql)) {
    $user_data = mysqli_fetch_array($result);

    if (isset($user_data['USERNAME'])) {
      echo 'Username already registered';
      $username_already_exits =  true;
    }
  }

  if ($username_already_exits) {

    $return_get = '';

    if ($username_already_exits) {
      $return_get .= "error_username=1&";
    }

    header('Location: ../View/createAccountTeacher.php?' . $return_get);
    die();
  }

  $sql = "INSERT INTO teacher (name,username,password) values ('$name','$username','$password')";

  if (mysqli_query($link, $sql)) {
    return true;
  } else {
    return false;
  };
}

function register_user_student($name, $username, $password)
{
  $name = $_POST['name'];
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $dbObject = new db();
  $link = $dbObject->sql_connection();

  $username_already_exits =  false;

  $sql = "SELECT * FROM student WHERE USERNAME='$username'";

  if ($result = mysqli_query($link, $sql)) {
    $user_data = mysqli_fetch_array($result);

    if (isset($user_data['USERNAME'])) {
      echo 'Username already registered';
      $username_already_exits =  true;
    }
  }

  if ($username_already_exits) {

    $return_get = '';

    if ($username_already_exits) {
      $return_get .= "error_username=1&";
    }

    header('Location: ../View/createAccountStudent.php?' . $return_get);
    die();
  }

  $sql = "INSERT INTO student (name,username,password) values ('$name','$username','$password')";

  var_dump($sql);

  if (mysqli_query($link, $sql)) {
    return true;
  } else {
    return false;
  };
}
