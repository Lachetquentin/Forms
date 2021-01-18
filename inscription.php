<?php
session_start();

$db_username = 'root';
$db_password = '';
$db_name = 'form_db';
$db_host = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name);

$username = $_POST['username'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];

if(!mysqli_query($db, "INSERT INTO utilisateur SET username='".$username."',
  password='".md5($password)."', fname='".$fname."', lname='".$lname."', email='".$email."'"))
  {
    header('Location: login.php?erreur=3');
  } else  {
    $_SESSION['username'] = $username;
    header("Location: principale.php");;
}
 ?>
