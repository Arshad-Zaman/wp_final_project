<?php
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: https://codd.cs.gsu.edu/~azaman3/WP/PW/4/login.php");
}
?>