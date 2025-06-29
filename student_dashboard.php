<?php
session_start();
if (!isset($_SESSION['student'])) {
  header("Location: login.php");
  exit();
}
echo "<h1>Welcome, Student!</h1>";
?>
