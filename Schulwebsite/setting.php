<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('meta.php');?>
<body>
	<?php include('header.php'); ?>
<section2>
<?php
include('session.php');

$_SESSION['pageStore'] = "setting.php";

if(!isset($_SESSION['login_id'])){
header("location: login.php"); // Redirecting To login
}
echo '<h1>Einstellungen</h1>
<h2>'
. $session_fullName
. '</h2>

<script type="text/javascript">
function init() {
	document.getElementById("button")
		.addEventListener("click", warnung);
}

function warnung() {
	var check = confirm("Wollen sie ihren Account wirklich Löschen?");
	if (check == true) {
		window.location = "/destroyer.php";
	}
	if (check == false) {
		window.location = "/setting.php";
}
document.addEventListener("DOMContentLoaded", init);
</script>


<br>
<a href="index.php">Profil</a>
<a href="index.php">Ausloggen</a>';
?>
</section2>
	<?php include("footer.php") ?>
</body>
</html>
