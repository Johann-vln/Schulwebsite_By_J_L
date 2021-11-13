<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#000"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "content": {
    "message": "Wir nutzen Cookies um ihnen das zu bieten was sie verdienen!",
    "dismiss": "Ok ",
    "link": "Mehr",
    "href": "imprint.php"
  }
});
</script>

<div id="wrapper">
<header>
<a href="index.php"><img src="Bilder/Logo2.png" alt="Logo" width="100"></header></a>
<br>
<br>

<?php include('session.php'); ?>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="ueber_uns.php">Über uns</a></li>
<li><a href="contact.php">Kontakte</a></li>

<?php
if (isset($session_fullName)) {
  echo "<li><a href=\"account.php\">Profil</a></li>";
} else {
  echo '<li><a href="form.php">Anmelden</a></li>';
}
?>
</ul>
</nav>
<div class="fehlermeldung">
  <?php
  if (isset($fehlermeldung)) {
    echo $fehlermeldung;
  }
  ?>
</div>
