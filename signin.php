<!DOCTYPE html>
<html>
<?php
$accountCreated = false; // A flag to check if the account has been created

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "tp1";

    // Create a database connection
    $conn = new mysqli($hostname, $username, $password, $database,3307);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user details from the form
    $name = $_POST['name'];
    $phone = $_POST['pno'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    // Check if the 'plan' variable exists in the POST data, and if so, convert it to a comma-separated string
    $plan = isset($_POST['plan']) ? implode(', ', $_POST['plan']) : '';

    // Create and execute the SQL query to insert user details into the 'user' table
    $sql = "INSERT INTO user (name, phone, email, pass, plan) VALUES ('$name', '$phone', '$email', '$password', '$plan')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        $accountCreated = true;
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
']'
    // Close the database connection
    $conn->close();
}

$hostname = "localhost";
$username = "root";
$password = "";
$database = "tp1";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
$conn->close();

?>


<head>
  <title>Sign In</title>
  <!---
  <link rel="stylesheet" type="text/css" href="stylesi.css">--->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const submitButton = document.getElementById("submit-button");
      const form = document.getElementById("signup-form");
      const successMessage = document.getElementById("success-message");

      if (submitButton && form) {
        submitButton.addEventListener("click", function () {
          if (validateForm()) {
            const formData = new FormData(form);

            fetch("<?php echo $_SERVER['PHP_SELF']; ?>", {
              method: "POST",
              body: new URLSearchParams(formData),
            })
              .then((response) => response.text())
              .then((data) => {
                if (data === "Registration Successful") {
                  form.style.display = "none"; // Hide the form
                  successMessage.style.display = "block"; // Show the success message
                } else {
                  document.getElementById("error").textContent = data;
                }
              })
              .catch((error) => {
                console.error("Fetch error:", error);
              });
          }
        });
      }
    });

    function validateForm() {
      const name = document.forms["form1"]["name"].value;
      const phone = document.forms["form1"]["pno"].value;
      const email = document.forms["form1"]["email"].value;
      const password = document.forms["form1"]["pass"].value;
      const plans = document.querySelectorAll('input[name="plan"]:checked');

      if (name === "" || phone === "" || email === "" || password === "" || plans.length === 0) {
        document.getElementById("error").textContent = "All fields are required.";
        return false;
      }

      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      if (!email.match(emailPattern)) {
        document.getElementById("error").textContent = "Please enter a valid email address.";
        return false;
      }

      return true;
    }
  </script>
</head>
<body>
  <div id="error" class="error-message"></div>
  <form name="form1" id="signup-form" onsubmit="return validateForm();">
    <p><b>Name :</b><input type="text" size="20" name="name"></p>
    <p><b>Phone Number:</b><input type="text" size="20" name="pno"></p>
    <p><b>Email id :</b><input type="text" size="20" name="email"></p>
    <p><b>Password :</b><input type="password" size="20" name="pass"></p>

    Select your business plan:<br>
    <input type="checkbox" name="plan" id="t1" value="Buy">Buy
    <input type="checkbox" name="plan" id="t2" value="Sell">Sell

    <p><input type="button" value="Submit" id="submit-button"></p>
  </form>
  <div id="success-message" style="display: none;">Account Created!</div>
  <div id="container">
    <a href="index.php">
      <div id="logo">
        <h1></h1>
      </div>
    </a>
  </div>
  <div id="container1">
    <div id="menu">
      <ul>
        <li><a href="login.php">log in</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="con1.php">contact</a></li>
        <li><a href="help.php">help</a></li>
        <li><a href="profile.php">
          <img src="profileicon2.png" alt="Button 1" width="60" height="60"></a>
        </li>
      </ul>
    </div>
  </div>
</body>
</html>
