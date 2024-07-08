<?php
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="form">
    <h1>Login Form</h1>
    <form name="form" action="login.php" onsubmit="return isvalid()" method="POST">
      <label>Username: </label>
      <input type="text" id="user" name="user">
      <br><br>
      <label>Password</label>
      <input type="password" id="pass" name="pass">
      <br><br>
      <input type="submit" id="btn" value="login" name="submit">
    </form>
  </div>
  <script>
    function isvalid() {
      var user = document.getElementById("user").value;
      var pass = document.getElementById("pass").value;
      if (user == "" && pass == "") {
        alert("All fields must be filled out");
        return false;
      } else {
        if (user == "") {
          alert("Username must be specified")
          return false;
        }
        if (pass == "") {
          alert("Password must be specified")
          return false;
        }
      }
    }
  </script>
</body>

</html>