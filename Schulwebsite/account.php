<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("meta.php") ?>
  <body>
    <?php include("header.php") ?>
  <section2>
    <?php
      if(!isset($_SESSION['login_id'])){
        header("location: form.php"); // Redirecting To login
      }
      echo '<h1>Profil</h1>
      <h2>'
      . $session_fullName
      . '<br></h2>
      <a href="setting.php">Einstellungen</a>
      <a href="logout.php">Ausloggen</a>';
      ?>
    </section2>
        <?php include("footer.php") ?>
  </body>
</html>
