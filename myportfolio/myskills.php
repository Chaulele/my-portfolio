<!DOCTYPE html>
<H lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet"type="text/css" href="./css/style.css"/>
    <title>Joseph</title>
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

  <header>
    <nav>
      <div class="logo-student">
        <h3>Joseph Phiri</h3>
      </div>
      <ul class="links">
        <li>
          <a href="index.php">Home</a></li>
        <li><a href="aboutme.php">About</a></li>
        <li><a href="myskills.php">skills</a></li>
        <li><a href="projects.php">projects</a></li>
        <li><a href="contact.php">contact</a></li>
        <li><input type="text" name="search" placeholder="Search.."></li>
      </ul>   
     </nav>
  </header>
  

    <?php
    // SQL query to retrieve data from the database
    $sql = "SELECT * FROM skills";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<br>" . $row["skills"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    ?>





    <section>
      <h3>Progress in some of my skills</h3><br><br>
    <p>HTML</p>
    <div class="container">
    <div class="skills html">5O%</div>
    </div><br>
    <P>CSS</P>
    <div class="container">
    <div class="skill CSS">25%</div>
    </div><br>
    <p>Javascript</p>
    <div class="Container">
    <div class="skills Javascript">2%</div>
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
  </footer>  
</body>
</html>
