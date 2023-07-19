<!DOCTYPE html>
<html>
<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet"type="text/css" href="./css/form.css"/>
    <title>Create Account</title>
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
            <li><a href="index.php">Home</a> </li>
            <li><a href="aboutme.php">About</a></li>
            <li><a href="myskills.php">My skills</a></li>
            <li><a href="projects.php">projects</a></li>
            <li><a href="contact.php">contact</a></li>
            <li><input type="text" name="search" placeholder="Search.."></li>
            </ul>

        </nav>
      </header>
    <div class="sign-up-form">
            <h2> Create Account</h2>
            <p>Please fill in this form to create an account</p>
    <form>
        <label for="fname">First Name</label><br>
        <input type="text" id="fname"name="fname"value=""placeholder="enter first name"><br>
        <label for="sname">Surname</label><br>
        <input type="text"id="sname"name="sname"value=""placeholder="enter surname"><br>
        <label for="email">email</label><br>
        <input type="text"id="email"name="email"value=""placeholder="email"placeholder="enter email"><br>
        <label for="password">password</label><br>
        <input type="password" id="passaword" name="password" value=""placeholder="enter password"><br>
        <label>Gender</label><br>
        <input type="radio" id="male" name="gender" value="male"checked>Male<br>
        <input type="radio" id="female" name="gender"value="female"checked>Female<br><br>
        <label for="AGE">AGE</label><br>
        <select name="Age">
            <option value="15-18">15-18</option>
            <option value="18-25">18-25</option>
            <option value="25-35">25-35</option>
            <option value="35-40">35-40</option>
            <option value="40-50">40-50</option>
            <option value="50-above">50-above</option>
            
        </select><br><br>
        <label for ="checkbox"></label>
        <input type="checkbox"id="check"name="check"value="check"/>I agree to the terms and condition <br><br>
        <input type="submit" name="submit">
        
    </form>
    </div>    
</body>
</html>
