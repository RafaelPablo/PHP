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
  </br>
  <p style="text-align:center;color:white">Create account Teacher</p>
  <div class="container-sm">
    <form method="post" action="../Controller/registerAccountTeacher.php" id="formCreateAccount">
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Name</span>
        </div>
        <input type="text" class="form-control" name="name" aria-label="Name" aria-describedby="basic-addon1" required>
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Username</span>
        </div>
        <input type="text" class="form-control" name="username" aria-label="Username" aria-describedby="basic-addon1" required>
      </div>

      <div class="alert alert-danger" role="alert" style="<?= $error_username ? '' : 'display:none' ?>">
        Username already exists, please choose another username!
      </div>

      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">Password</span>
        </div>
        <input type="password" class="form-control" name="password" aria-label="Password" aria-describedby="basic-addon1" required>
      </div>
      </br>
      <button type="submit" style="text-align:center;" class="btn btn-outline-primary">Create</button>
      </br>
    </form>

    </br>
    </br>
    <button type="button" style="text-align:center;" class="btn btn-outline-primary" onclick="location.href = '../index.php'">Back to Login</button>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>