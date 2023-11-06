<!DOCTYPE html>
<html>

<head>
  <title>Sign In</title>
  <!---<h2>Sign in</h2>--->
  <link rel="stylesheet" type="text/css" href="stylesi.css">
  <script type="text/javascript">
    function display() {
      DispWin = window.open()
      message = "<b>Name: </b>" + document.form1.name.value + "<br><br>";
      message += "<b>Address: </b>" + document.form1.add.value + "<br><br>";
      message += "<b>Phone number</b>" + document.form1.pno.value + "<br><br>";
      message += "<b>Email id: </b>" + document.form1.email.value + "<br><br>";
      var t1 = document.getElementById("t1");
      var t2 = document.getElementById("t2");
      message += "<b>Business Plan: </b><br>"
      if (t1.checked) {
        message += document.form1.t1.value + "<br>";
      }
      if (t2.checked) {
        message += document.form1.t2.value + "<br><br>";
      }
      var selectedValue = document.querySelector('input[name="type"]:checked').value;
      message += "<b>Subscription type: </b>" + selectedValue;
      var detailsDiv = document.getElementById("details");
      message += "<p><b>Payment method: </b>" + document.form1.Payment.value + "</p>";
      //var payment=document.getElementById('payment');
      var pv = document.form1.payment.value
      message += "<b>Payment method: </b>" + pv;
      DispWin.document.write(message);
      //detailsDiv.innerHTML = message;
    }
  </script>
</head>

<body>
  <br><br><br><br><br><br>
  <form name=form1>
    <p><b>Name</b><input type="Text" size="20" name="name"></p>
    <!----<p><b>Address :</b><textarea name="add"></textarea></p>--->
    <p><b>Phone Number</b><input type="Text" size="20" name="pno"></p>
    <p><b>Email ID</b><input type="Text" size="20" name="email"></p>
    <p><b>Password</b><input type="Password" size="20" name="pass"></p>

    <b>Select your business plan:</b><br><br>
    <input type="checkbox" name="plan" id="t1" value="Buy">Buy
    <input type="checkbox" name="plan" id="t2" value="Sell">Sell

    <p><b>Please select your subscription type:</b><br>
      <input type="radio" name="type" value="male"> Regular
      <input type="radio" name="type" value="female"> Plus
      <input type="radio" name="type" value="other"> Premium
    </p>

    <!---<p><input type="reset" value="Reset"></p>--->
    <p><input type="button" value="Submit" onclick="display();"></p>
  </form>
  <div id="container">
    <a href="index.php">
      <div id="logo">
        <h1></h1>
      </div>
  </div>
  <div id="container1">
    <div id="menu">
      <ul>
        <li><a href="login.php">log in</a></li>
        <li><a href="services.php">services</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="con1.php">contact</a></li>
        <li><a href="help.php">help</a></li>
        <li>
          <a href="profile.php"><img src="profileicon2.png" alt="Button 1" width="60" height="60"></a></li>
      </ul>
    </div>
  </div>
</body>

</html>