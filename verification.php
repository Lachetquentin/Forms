<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password']))
{
    $db_username = 'root';
    $db_password = '';
    $db_name = 'form_db';
    $db_host = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name);

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username !== "" && $password !== "")
    {
        $req = "SELECT count(*) FROM utilisateur where username = '".$username."' and password = '".$password."' ";
        $query = mysqli_query($db,$req);
        $res = mysqli_fetch_array($query);
        $count = $res['count(*)'];
        if($count!=0)
        {
           $_SESSION['username'] = $username;
           header('Location: principale.php');
        }
        else
        {
           header('Location: login.php?erreur=1');
        }
    }
    else
    {
       header('Location: login.php?erreur=2');
    }

}
else
{
   header('Location: login.php');
}
mysqli_close($db);
?>
