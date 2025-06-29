<?php include 'header.php'; ?>
<style>
  header.hero {
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('hero.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 8rem 1rem;
  }
  header.hero h1 {
    font-family: 'Montserrat', sans-serif;
    font-size: 3rem;
    text-transform: uppercase;
    animation: glow 2s ease-in-out infinite alternate;
  }
  @keyframes glow {
    from { text-shadow: 0 0 10px #00f, 0 0 20px #00f; }
    to { text-shadow: 0 0 20px #0ff, 0 0 30px #0ff; }
  }
  .join-btn {
    display: inline-block;
    margin-top: 2rem;
    padding: 0.8rem 2rem;
    background: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
  }
  section {
    padding: 4rem 2rem;
    text-align: center;
    background: #fff;
    margin-bottom: 2rem;
  }
</style>

<header class="hero">
  <h1>Asian Mission Science Society</h1>
  <a href="register.php" class="join-btn">Join Us</a>
</header>

<section id="services">
  <h2>Services</h2>
  <p>Library, Expert Consultation, Real-Time Solutions</p>
</section>

<section id="about">
  <h2>About Us</h2>
  <p>Dedicated to advancing science and research development.</p>
</section>

<section id="why">
  <h2>Why Us?</h2>
  <p>Quality, support, and solutions for students and admins.</p>
</section>

<section id="contact">
  <h2>Contact</h2>
  <p>Kc Gogoi Road, Kadamoni, Near Sampoorna Kendra Vidyalaya, Dibrugarh, 786001</p>
  <p>MOBILE NO - 8134957206</p>
  <p>GMAIL ID - pranjyotiborah.640@gmail.com</p>
</section>

</body>
</html>
