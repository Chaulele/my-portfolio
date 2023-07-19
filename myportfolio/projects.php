<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <title>Joseph</title>
</head>
<body>
  <?php
  $severname="localhost";
  $username="root";
  $password="";
  $database="users";

  $conn=mysqli_connect($severname, $username, $password, $database);
  echo"success";
  ?>
 <!-- navigation bar with student name     -->
  <header>
    <nav>
      <div class="logo-student">
        <h3>Joseph</h3>
      </div>
      <ul class="links">
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutme.php">About</a></li>
        <li><a href="myskills.php">My skills</a></li>
        <li><a href="projects.php">projects</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><input type="text" name="search" placeholder="Search.."></li>
      </ul>
    </nav>
  </header>
  <!-- end of navigation bar -->
  <section>
    <h4>Recent Projects</h4>
    <div class="project-card">
      <img src="./images/form.png">
      <p>And here is one of my recenct projects which was creating a student registration form.</p>
      <a href="formss.php">View Project</a>
    </div>
  </section>
      <footer>
    <div class="contact">
      <div class="phone-area">
        <span>Phone</span><br>
        <a href="tel:0884487696">0884487696</a>
      </div>
      <div class="email-area">
        <span>Email Address</span><br>
        <a href="mailto:josepchauphiri98@gmail.com">josepchauphiri98@gmail.com</a>
      </div>
      <div class="sm-area">
        <span>Social Media</span><br>
        <a href="#">facebook</a>
      </div>
    </div>
  </footer>  </body>
</html>
