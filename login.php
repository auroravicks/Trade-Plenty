<!DOCTYPE html>
<html>

<head>
  <title>Log in</title>
  <!-- Add your stylesheets here -->
  <link rel="stylesheet" type="text/css" href="stylesi.css">
</head>

<body>
  <div id="login">
    
    <form name="forml" id="login-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateEmail();">
      <p><b>Email ID</b><input type="text" size="20" name="email"></p>
      <span class="error-message" id="email-error"></span>
      <p><b>Password</b><input type="password" size="20" name="pass"></p>
      <span class="error-message" id="pass-error"></span>
      <p><input type="submit" value="Submit"></p>
    </form>
    <p>
      Don't have an account? <a href="signin.php">Sign up</a>
    </p>
  </div>
  <div id="container">
    <a href="index.php">
      <div id="logo">
        <h1></h1>
      </div>
    </a>
  </div>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $hostname = "localhost";
      $username = "root";
      $password = "";
      $database = "tp1";

      // Create a database connection
      $conn = new mysqli($hostname, $username, $password, $database, 3307);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $email = $_POST["email"] ?? '';
      $password = $_POST["pass"] ?? '';

      $sql = "SELECT email, pass FROM user WHERE email = '$email' AND pass = '$password'";
      $result = $conn->query($sql);
      $num = mysqli_num_rows($result);

      if ($result->num_rows > 0) {
        echo "Login Successful";
        // Add your successful login content here
    } else {
        echo "Login Failed"; // Display an error message
    }
    
    }
    ?>
  <div id="container1">
    <div id="menu">
      <ul>
        <li><a href="login.php">log in</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="con1.php">contact</a></li>
        <li><a href="help.php">help</a></li>
        <li><a href="profile.php">
          <img src="profileicon2.png" alt="Button 1" width="60" height="60">
        </a></li>
      </ul>
    </div>
  </div>

  <script>
    function validateEmail() {
      var email = document.forms["forml"]["email"].value;
      // Your email validation logic here
      var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      var errorMessage = document.getElementById("email-error");

      if (!email.match(emailPattern)) {
        errorMessage.textContent = "Please enter a valid email address";
        return false;
      } else {
        errorMessage.textContent = "";
        return true;
      }
    }
  </script>
</body>

</html>
