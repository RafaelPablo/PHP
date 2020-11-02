<?php

$error = isset($_GET['error']) ? $_GET['error'] : 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="View/css/all.css" />
  <title>Free School System</title>
</head>

<body>
  <img src="View/images/logo.png" class="centerImg">
  </br>
  <p style="text-align:center;color:white">Welcome</p>

  <div class="container-sm">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="student-tab" data-toggle="tab" href="#student" role="tab" aria-controls="student" aria-selected="true">Student</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="teacher-tab" data-toggle="tab" href="#teacher" role="tab" aria-controls="teacher" aria-selected="false">Teacher</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="student-tab" role="tabpanel" aria-labelledby="student-tab">
        </br>
        <form method="post" action="Controller/loginAccountStudent.php">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Username</span>
            </div>
            <input type="text" class="form-control" name="username" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="password" class="form-control" name="password" aria-label="Password" aria-describedby="basic-addon1" required>
          </div>
          </br>
          <button type="submit" align:center class="btn btn-outline-primary" value="login">Login</button>
          </br>
          </br>
          <button type="button" style="text-align:center;" class="btn btn-outline-primary" onclick="location.href = '../View/createAccountStudent.php'">Create a new account here</button>
        </form>
      </div>
      <div class="tab-pane fade" id="teacher" role="tabpanel" aria-labelledby="teacher-tab">
        </br>
        <form method="post" action="Controller/loginAccountTeacher.php">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Username</span>
            </div>
            <input type="text" class="form-control" name="username" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Password</span>
            </div>
            <input type="password" class="form-control" name="password" aria-label="Password" aria-describedby="basic-addon1" required>
          </div>
          </br>
          <button type="submit" align:center class="btn btn-outline-primary" value="login">Login</button>
          </br>
          </br>
          <button type="button" style="text-align:center;" class="btn btn-outline-primary" onclick="location.href = '../View/createAccountTeacher.php'">Create a new account here</button>
        </form>
      </div>
    </div>

    </br>
    <div class="alert alert-danger" role="alert" style="<?= $error == 1 ? '' : 'display:none' ?>">
      Username or password is invalid!
    </div>
    <div class="alert alert-success" role="alert" style="<?= $error == 2 ? '' : 'display:none' ?>">
      Registration complete!
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>