<!DOCTYPE html>
<html>

<head>
  <title>form page</title>
  <link rel="stylesheet" type="text/css" href="stylesi.css">
  <script type="text/javascript">
    // function display() {
    //   DispWin = window.open()
    //   message = "<b>Name: </b>" + document.form1.name.value + "<br><br>";
    //   message += "<b>Address: </b>" + document.form1.add.value + "<br><br>";
    //   message += "<b>Phone number</b>" + document.form1.pno.value + "<br><br>";
    //   message += "<b>Email id: </b>" + document.form1.email.value + "<br><br>";
    //   var t1 = document.getElementById("t1");
    //   var t2 = document.getElementById("t2");
    //   message += "<b>Business Plan: </b><br>"
    //   if (t1.checked) {
    //     message += document.form1.t1.value + "<br>";
    //   }
    //   if (t2.checked) {
    //     message += document.form1.t2.value + "<br><br>";
    //   }
    //   var selectedValue = document.querySelector('input[name="type"]:checked').value;
    //   message += "<b>Subscription type: </b>" + selectedValue;
    //   var detailsDiv = document.getElementById("details");
    //   message += "<p><b>Payment method: </b>" + document.form1.Payment.value + "</p>";
    //   //var payment=document.getElementById('payment');
    //   var pv = document.form1.payment.value
    //   message += "<b>Payment method: </b>" + pv;
    //   DispWin.document.write(message);
    //   //detailsDiv.innerHTML = message;
    //}
  </script>
</head>

<body>
  <form name=form1 style="padding-top: 70px;">
    <p><b>Business Name :</b><input type="Text" size="20" name="name"></p>
    <p><b>Address :</b><textarea name="add"></textarea></p>
    <p><b>Phone Number:</b><input type="Text" size="20" name="pno"></p>
    <p><b>Email id :</b><input type="Text" size="20" name="email"></p>
    <p><b>Password :</b><input type="Password" size="20" name="pass"></p>

    Select your business' plan:<br>
    <input type="checkbox" name="plan" id="t1" value="Buy"> Buy
    <input type="checkbox" name="plan" id="t2" value="Sell"> Sell<br><br>

    Select your subscription type:<br>
    <label for="s1" style="text-align: center;"> Regular</label>
    <input type="radio" name="type" id="s1" value="Regular" style="text-align: center;"><br>
    <label for="s2" style="text-align: center;"> Plus</label>
    <input type="radio" name="type" id="s2" value="Plus" style="text-align: center;"><br>
    <label for="s3" style="text-align: center;"> Premium</label>
    <input type="radio" name="type" id="s3" value="Premium" style="text-align: center;"><br>


    <label for="payment">Choose a payment method:</label>
    <select name="Payment" id="payment">
      <option value="Card">Card</option>
      <option value="Netbanking">Netbanking</option>
    </select><br><br>

    Upload your first advertisement:(optional)
    <input type="file" name="file"><br>

    <p><input type="reset" value="Reset"></p>
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
            <li><a href="profile.php">
            <img src="profileicon2.png" alt="Button 1" width="60" height="60"></a></li>
      </ul>
    </div>
  </div>
</body>

</html>