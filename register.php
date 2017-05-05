<?php
session_start();
$_SESSION['message'] = ' ';
$mysqli = new mysqli('localhost','root', 'love');

if ($_SERVER)['REQUEST_METHOD'] == 'POST' {
  //two passwords are equal
  if($_POST['password'] == $_POST['confirmpassword']){

    print_r($_FILES); die;

    $username = $mysqli->real_escape_string($_POST['username']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $password = md5($_POST['password']); //md5 hash password security
    $avatar_path = $mysqli->real_escape_string('image/'_$_FILES);

    //make sure file type is image
    if (preg_match("!image!", $_FILES['avatar']['type'])){

    }

  }
}

?>
