<?php
echo;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn{
  background-color: #4CAF50;
  color: white;
  border: none;
}
/* Set a style for the submit button */
.loginbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.login:hover {
  opacity: 1;
}
/* Add a blue text color to links */
/* Set a grey background color and center the text of the "sign in" section */
.signup {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="sample_a.php" target="_blank"> <!-- Opens the sample_a.php in a new tab-->
  <div class="container"> 
    <h1>Login</h1>
    <hr>
	<label for="name"><b>Name</b></label>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required> <!-- enter email -->
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required> <!-- enter passwod -->
    <hr>
    <input type="submit" class="loginbtn" name="save" value="Submit"/> <!-- submit form -->
  </div>

  <div class="container signup">
    <p>Don't have an account? <button class="registerbtn" onclick="window.location.href='register.php'">Register me</button>.</p>
	  <!-- redirects to admin registration page. -->
  </div>
</form>
</body>
</html>
