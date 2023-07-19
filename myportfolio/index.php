<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Joseph</title>
    <style>
      .mySlides {display:none;}
    </style>
</head>
<body>
  <?php
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  ?>

 <!-- navigation bar with student name     -->
  <header>
    <nav>
      <div class="logo-student">
        <h3>Joseph Phiri</h3>
      </div>
      <ul class="links">
        <li>
          <a href="index.php">Home</a>
        </li>
        <li><a href="aboutme.php">About</a></li>
        <li><a href="myskills.php">My skills</a></li>
        <li><a href="projects.php">projects</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><input type="text" name="search" placeholder="Search.."></li>
      </ul>
    </nav>
  </header>
  <!-- end of navigation bar -->
   <!-- greet time    -->
  <div id="greeting"></div>
  <script src="java.js"></script>
  <!-- end of greet time -->
  <!-- student bio -->
  <section class="bio" id="about">
    <div class="student-bio">
      <img src="./images/joseph.jpg" alt="">
      <h3>I'm Joseph Phiri</h3>
      <h4>I am a Web Developer</h4>
    </div>
    <h3>About Me</h3>

    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>" . $row["aboutme"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>

  </section>
  <!-- end of the about me section -->
  <section class="my-skills">
    <h4>My skills</h4>
         <button name="button">Networking</button/>
         <button name="button">Systems Support</button>
         <button name="button">HTML</button>
         <button name="button">CSS</button>
         <button name="button">Data entry</button>  
  </section><br>
  <!-- end of skills section -->
  <section>
    <h4>Recent Projects</h4><br>
    <div class="project-card">
      <div class="display-container">
      
    <img class="mySlides" src="./images/form.png" style="width:100%">
    <img class="mySlides" src="./images/Screenshot (1).png" style="width:100%">
    <img class="mySlides" src="./images/Screenshot (3).png" style="width:100%">
    <img class="mySlides" src="./images/Screenshot (6).png" style="width:100%">
    <img class="mySlides" src="./images/Screenshot (7).png" style="width:100%">
    </div>
<script>
  var myIndex = 0;
  carousel();
  
  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 4 seconds
  }
  </script>
  <p>And here is one of my recenct projects which was creating a student registration form.</p>
  <a href="formss.php">View Project</a>
  </div>
  </section>
  <!-- end of my recent works -->
  <section id="skills">
    <h4>Some of my skills</h4>
   
  <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM home";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "" . $row["skills"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    // Close the connection
    $conn->close();
    ?>


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
  </footer>  
</body>
<script src="java.js"></script>
</html>
