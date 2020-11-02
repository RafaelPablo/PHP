<?php

class db
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'bd_freeschool';

  public function sql_connection()
  {
    $connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
    mysqli_set_charset($connection, 'utf8');

    if (mysqli_connect_errno()) {
      $message = 'Not connected to database, because:';
      echo $message . mysqli_connect_error();
    }

    return $connection;
  }
}
