<?php

class School
{
  //Attributes
  private $name, $adress, $phone, $email;

  //Methods
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setAdress($adress)
  {
    $this->adress = $adress;
  }

  public function getAdress()
  {
    return $this->adress;
  }

  public function setPhone($phone)
  {
    $this->phone = $phone;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }
}

class Person
{
  //Attributes
  protected $name, $username, $password;

  //Methods
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setUsername($username)
  {
    $this->username = $username;
  }

  public function getUsername()
  {
    return $this->username;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }
}

class Student extends Person
{
}

class Teacher extends Person
{
  public function TeacherPermissons()
  {
  }
}

class Course
{
  //Attributes
  private $name, $days;

  //Methods
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setDays($days)
  {
    $this->days = $days;
  }

  public function getDays()
  {
    return $this->days;
  }
}

class Lesson
{
  //Attributes
  private $content, $hours;

  //Methods
  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setHours($hours)
  {
    $this->hours = $hours;
  }

  public function getHours()
  {
    return $this->hours;
  }
}
