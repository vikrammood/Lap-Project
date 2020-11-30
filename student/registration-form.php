<?php
//create connection.
$conn = new mysqli("localhost:3306","root","Keerthi@2001","student");
extract($_POST); //imports post variables
if(isset($save)) //it checks whether we clicked the submit button or not.
{
$dob=$yy."-".$mm."--".$dd; 
$sql = "SELECT * FROM studentdetails"; //selecting all rows from studentdetails.
$count = $conn->query($sql)->num_rows; //counts number of rows in student details
$sql1 = "SELECT * FROM studentdetails where email = '$e'"; //selecting the row from student details where email = entered email.
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM admindetails where email = '$e'"; //selecting the row from admin details where email = entered email.
$result2 = $conn->query($sql2);
$sql3 = "SELECT * FROM pdetails where email = '$e'"; //selecting the row from principal details where email = entered email.
$result3 = $conn->query($sql3);
if ($result1->num_rows > 0) { //if the entered email already exists.
$msg = "<font color='red'>".ucfirst($e)."already exists choose another email</font>"; 
}
else if($result2->num_rows > 0 or $result3->num_rows > 0) //if user is not an admin or a principal
{
$msg = "<font color='red'>You cannot register here</font>";
}
else{
$query="INSERT INTO studentdetails VALUES ($count+1,'$n','$r','$b','$e','$g','$p','$dob',now())"; //inserting the details in specified order.

if ($conn->query($query) === TRUE) { //if details are inserted succesfully 
  header("Location: login.php"); //redirect to login page.
} else {
  echo "Error: " . $query . "<br>" . $conn->error; //if not insterted succesfully it shows error
}
}
}
$conn->close(); //close connection.
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
}
</style>
</head>

<body>
<div align="center" id="table">
<form method="post" enctype="multipart/form-data">
<table width="500" height="300" border="1"> 
<?php  
  if(isset($msg)){ //it shows the error msg .
  echo $msg; 
  }
?>
  <tr>
    <th width="150">Enter your Name</th> 
    <td width="200"> 
	<input type="text" placeholder="your first name" name="n" pattern="[a-z A-Z]*" required /></td>  <!--enter your name-->
  </tr>
  <tr>
    <th>Enter your Roll no.</th>
    <td><input type="text" name="r"/></td> <!--enter your rollno -->
  </tr>
  <tr>
    <th>Enter your Branch</th>
    <td><input type="text" name="b"/></td> <!--enter your Branch -->
  </tr>
  <tr>
    <th>Enter your Email</th>
    <td><input type="email" id="email" name="e"/></td> <!--enter your email-->
  </tr>
  <tr>
    <th height="23">Select your Gender</th> 
    <td style="vertical-align: top;">
  <input type="radio" name="g" value="m"/><label>Male</label>
	<input type="radio" name="g" value="f"/><label>Female</label> <!-- select gender -->
  </td>
  </tr>
  <tr>
    <th>Enter your Password</th>
    <td><input type="password" name="p"/></td> <!--enter password -->
  </tr>
  <tr>
    <th>Select your DOB</th>
    <td>
		<select name="mm"> <!-- select month -->
			<option value="">Month</option>
			<?php 
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
		<select name="dd"> <!-- select date -->
			<option value="">Date</option>
			<?php 
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
		<select name="yy"> <!-- select year -->
			<option value="">Year</option>
			<?php 
			for($i=1900;$i<=2015;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
	</td>
  </tr>
</table>
<div style="margin-top: 10px">
  <input type="submit" name="save" class="sbtn" value="Register Me"/> <!-- submit details -->
  <input type="reset" value="Reset"/> <!-- reset details -->
</div>
</form>
<br>
<input type="button" value="Login Me" onclick="window.location.href='login.php'" /> <!-- redirects to login page. -->
</div>
</body>
</html>
