<?php
$conn = new mysqli("localhost:3306","root","Med09","student");
extract($_POST);
if(isset($save))
{

$sql = "SELECT * FROM pdetails";
$count = $conn->query($sql)->num_rows;
$sql = "SELECT * FROM pdetails where email = '$e'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$msg = "<font color='red'>".ucfirst($e)."already exists choose another email</font>";
}
else
{
$query="INSERT INTO pdetails VALUES ($count+1,'$n','$e','$p',now())";


if ($conn->query($query) === TRUE) {
  header("Location: login_p.php");
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}
}
}
$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<style>
input,textarea{width:200px}
input[type=radio],input[type=checkbox]{width:10px}
input[type=submit],input[type=reset],input[type=button]{width:150px;height: 30px;}
#table {
  margin-top: 150px;
}
td input{
  margin-left: 10px;
  height: 30px;
  width: 300px
}
input[type=radio]{
  margin-right: 40px;
}
td select{
  margin-left: 10px;
  height: 30px;
}
label{
  position: absolute;
  padding: 10px 0 10px 0;
  margin-left: -35px
}or column 'gender' at row 1

</style>
</head>

<body>
<div align="center" id="table">
<form method="post" enctype="multipart/form-data">
<table width="500" height="300" border="1">
<?php
  if(isset($msg)){
  echo $msg;
  }
?>
  <tr>
    <th width="150">Enter your Name</th>
    <td width="200">
	<input type="text" placeholder="your first name" name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>


  <tr>
    <th>Enter your Email</th>
    <td><input type="email" id="email" name="e"/></td>
  </tr>

  <tr>
    <th>Enter your Password</th>
    <td><input type="password" name="p"/></td>
  </tr>

</table>
<div style="margin-top: 10px">
  <input type="submit" name="save" class="sbtn" value="Register Me"/>
  <input type="reset" value="Reset"/>
</div>
</form>
<br>
<input type="button" value="Login Me" onclick="window.location.href='login_p.php'" />
</div>
</body>
</html>
