<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="container">
      <!-- Connexion -->

      <form action="verification.php" method="post">
        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" name="username" placeholder="Votre nom d'utilisateur" required>

        <label><b>Mot de passe</b></label>
        <input type="password" name="password" placeholder="Votre mot de passe" required>

        <input type="submit" id="submit" value='Se connecter'>

        <?php
        if(isset($_GET['erreur'])){
          $e = $_GET['erreur'];
          if($e==1) {
            echo "<p> Nom d'utilisateur ou mot de passe incorrect, veuillez réessayer !</p>";
          }
          if($e==2)
          {
            echo "<p> Nom d'utilisateur ou mot de passe vide, veuillez réessayer !</p>";
          }
          if($e==3)
          {
            echo "Une erreur s'est produite: ".mysqli_error($db);
          }
        }
         ?>

      </form>

      <br/>

      <form action="inscription.php" method="post">
        <h1>Inscription</h1>

        <input type="text" name="username" placeholder="Votre nom d'utilisateur" required>

        <input type="text" name="fname" placeholder="Prénom" required>

        <input type="text" name="lname" placeholder="Nom de famille" required>

        <input type="email" name="email" placeholder="Email" required>

        <input type="password" placeholder="Votre mot de passe" name="password" required>

        <input type="submit" id="submit" value='Inscription'>
      </form>
    </div>
  </body>
</html>
