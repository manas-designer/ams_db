<?php
include 'db.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['reg_id'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users WHERE reg_id='$id' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['role'] == 'admin') {
      $_SESSION['admin'] = $id;
      header("Location: admin_dashboard.php");
    } else {
      $_SESSION['student'] = $id;
      header("Location: student_dashboard.php");
    }
  } else {
    echo "Invalid ID or Password!";
  }
}
?>

<form method="post">
  <h2>Login</h2>
  <input type="text" name="reg_id" placeholder="Registration ID" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
  <p><a href="register.php">Register</a> | <a href="#">Forgot Password?</a></p>
</form>
