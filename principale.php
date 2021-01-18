<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">

      <form>

      <br/>

      <?php
      session_start();
      if(isset($_GET['deconnexion']))
      {
        if($_GET['deconnexion']==true)
        {
          session_unset();
          header("location:login.php");
        }
      }
      if($_SESSION['username'] !== ""){
        $user = $_SESSION['username'];
        echo "Bienvenue $user !";
      }
       ?>

       <br/>

       <input type="button" id="deconnexion" value="Déconnexion" onclick="window.location.href = 'principale.php?deconnexion=true';"/>
     </form>
    </div>
  </body>
</html>
