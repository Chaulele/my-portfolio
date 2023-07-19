<!DOCTYPE html>
<html>
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet"type="text/css" href="./css/form.css"/>
    <title>Contact Us</title>
    <script>
      function validateForm() {
        let x = document.forms["myForm"]["password"].value;
        if (x == "") {
          alert("password must be filled out");
          return false;
        }
      }
      </script>
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
    <header>
        <nav>
          <div class="logo-student">
            <h3>Joseph Phiri</h3>
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
<div class="form">
        <h2>Contact Us </h2>
<form name="myForm" action="/action_page.php" onsubmit="return validateForm()" method="POST">
    <label for="name">Name</label><br>
    <input type="text" id="name"name="full_name"value=""placeholder="enter your full name" required><br>
    <label for="email">email</label><br>
    <input type="text"id="email"name="email"value=""splaceholder="enter your email"required><br>
    <label for="password">Password</label><br>
    <input type="password"id="password"name="password"value=""placeholder="enter your password"><br>
    <label for="phone">Phone Number</label><br>
    <input type="phone"id="phone"name="phone"value="+265"required><br>
    <label for="comment">Comment</label><br>
    <textarea name="message" rows="20" cols="50"></textarea><br><br>
    <input type="submit" name="submit">
</form>
</div>   

</body>
</html>