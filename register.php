<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['reg_id'];
  $password = $_POST['password'];
  $role = $_POST['role'];

  $query = "INSERT INTO users (reg_id, password, role) VALUES ('$id', '$password', '$role')";
  if (mysqli_query($conn, $query)) {
    echo "Registered successfully!";
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>

<form method="post">
  <h2>Register</h2>
  <input type="text" name="reg_id" placeholder="Registration ID" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <select name="role" required>
    <option value="student">Student</option>
    <option value="admin">Admin</option>
  </select><br>
  <button type="submit">Register</button>
</form>
