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
/* Add padding to the containers */
.container {
  padding: 16px;
  background-color: white;
}
/*style full width of input fields*/ 
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
/* Overwrite default styles of hr*/ 
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/*Set A style for Submit Button*/ 
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}
/*adding a blue text color to the links . text colors*/
a {
  color: dodgerblue;
}
/*Setting a grey color background color and center the text of the "Sign in" selection. color styles */  
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form method="post" enctype="multipart/form-data" action="sample.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to register for exams.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <label for="email"><b>Email</b></label> 
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
    <hr>
   <! it shows information by creating an account you have to agree the terms and conditions >
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input type="submit" name="save" value="Submit"/>
  </div>
  <! if you have account already so you can get signin directly as with your details >
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
</body>
</html>
