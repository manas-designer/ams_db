<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}
echo "<h1>Welcome, Admin!</h1>";
?>
