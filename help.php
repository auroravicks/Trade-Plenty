<!DOCTYPE html>
<html>

<head>
  <title>Help</title>
  <link rel="stylesheet" href="stylesi.css">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
</head>

<body ng-app="myApp" ng-controller="FormController">
  <br><br><br><br><br><br><br>
  <b>If you are in need of any assistance, please leave your grievances below, and we'll be sure to get back to you.</b>

  <form name="f3" style="margin-top: 10px;" ng-submit="submitForm()">
    <p>
      <b>Email id:</b>
      <input type="email" size="20" name="email" ng-model="formData.email" required>
      <span ng-show="f3.email.$error.required && f3.email.$dirty">
        Email is required.
      </span>
      <span ng-show="f3.email.$error.email">
        Invalid email address.
      </span>
    </p>
    <p>
      <b>Business name:</b>
      <input type="text" size="20" name="bname" ng-model="formData.bname" required>
    </p>
    <p>
      <b>Phone number:</b>
      <input type="text" size="20" name="pno" ng-model="formData.phone" ng-pattern="/^\d{10}$/" required>
      <span ng-show="f3.pno.$error.pattern">Invalid phone number (10 digits required).</span>
    </p>
    <p>
      <b>Grievance:</b><textarea name="grv" ng-model="formData.grv" required></textarea>
    </p>
    <p><input type="button" value="Submit" ng-disabled="f3.$invalid"></p>
  </form>
  <div ng-show="submitted">
    <p>Form data submitted:</p>
    <ul>
      <li><strong>Name:</strong> {{ formData.name }}</li>
      <li><strong>Email:</strong> {{ formData.email }}</li>
    </ul>
  </div>
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
            <img src="profileicon2.png" alt="Button 1" width="60" height="60"></a></li>
      </ul>
    </div>
  </div>
  <script>
    var app = angular.module('myApp', []);

    app.controller('FormController', function ($scope) {
      $scope.formData = {};
      $scope.submitted = false;

      $scope.submitForm = function () {
        if ($scope.f3.$valid) {
          $scope.submitted = true;
        }
      };
    });
  </script>
</body>

</html>