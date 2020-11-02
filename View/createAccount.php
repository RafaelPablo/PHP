<?php

$error_username = isset($_GET['error_username']) ? $_GET['error_username'] : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="../View/css/all.css" />
  <title>Create Account</title>
</head>

<body>
  <img src="../View/images/logo.png" class="smallImg">
  <h2>Create Account</h2>
  </br>
  <form method="post" action="../Controller/registerAccount.php" id="formCreateAccount">
    <h3>Name</h3>
    <h5>*Only letters</h5>
    <input type="text" class="inputs" name="name" required>
    <div class="alert alert-danger" role="alert" style="<?= $error_username ? '' : 'display:none' ?>">
      Username already exists, please choose another username!
    </div>
    <h3>Username</h3>
    <h5>*Only letters</h5>
    <input type="text" class="inputs" name="username" required>
    <h3>Password</h3>
    <h5>*Require letters and numbers</h5>
    <input type="password" class="inputs" name="password" required>
    <h3>Repeat Password</h3>
    <input type="password" class="inputs">
    </br>
    <button type="submit" class="buttons"> Create </button>
  </form>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>