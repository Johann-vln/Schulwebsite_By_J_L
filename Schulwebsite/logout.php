<?php
session_start(); // Starting Session

if(session_destroy()) // Destroying All Sessions
{
header("Location: form.php"); // Redirecting To Home Page
}
?>
