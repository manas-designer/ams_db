<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>AMS Society</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"/>
  <style>
    body { margin:0; font-family: Arial, sans-serif; scroll-behavior: smooth; }
    nav {
      background: #ffffffee;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      position: sticky; top: 0; z-index: 999;
    }
    nav .logo {
      font-family: 'Montserrat', sans-serif;
      font-size: 1.5rem;
      font-weight: bold;
      color: #007BFF;
    }
    nav ul { list-style: none; display: flex; margin:0; padding:0; }
    nav ul li { margin-left: 1.5rem; }
    nav ul li a {
      text-decoration: none;
      color: #333;
      font-weight: 600;
    }
    nav ul li a:hover {
      color: #007BFF;
    }
  </style>
</head>
<body>
<nav>
  <div class="logo">AMS Society</div>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#why">Why Us</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="register.php">Register</a></li>
  </ul>
</nav>
