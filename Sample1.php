<?php
// $con=mysql_connect("localhost","root","Keerthi@2001") or die("not connected");
$conn = new mysqli("localhost:3306","root","Keerthi@2001","student");
extract($_POST);
if(isset($save))
{
$dob=$yy."-".$mm."--".$dd;
$query="INSERT INTO studentdetails VALUES (4,'$n','$r','$b','$g','$e','$p','$dob',now())";

if ($conn->query($query) === TRUE) {
  $msg= "<font color='blue'>Your data saved</font>";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}
}

$conn->close();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration Form</title>
<!defining style as format>	
<style>
input,textarea{width:200px}
input[type=radio],input[type=checkbox]{width:10px}
input[type=submit],input[type=reset]{width:100px}
</style>
</head>

<body>
<form method="post" enctype="multipart/form-data">
<table width="393" border="1">
 <tr>
 	<td colspan="2"><?php echo @$msg; ?></td>
 </tr>	
 <!taking yourname as input and defined as n>	
  <tr>
    <td width="159">Enter your Name</td>
    <td width="218">
	<input type="text" placeholder="your first name"  name="n" pattern="[a-z A-Z]*" required /></td>
  </tr>
 <!taking roll no as input and defined as r>	
  <tr>
    <td>Enter your Roll no.</td>
    <td><textarea name="r"></textarea></td>
  </tr>
  <!taking branch as input and defined as b>	
  <tr>
    <td>Enter your Branch</td>
    <td><textarea name="b"></textarea></td>
  </tr>
  <!taking gender by making a mark and defined it as g>	
  <tr>
    <td height="23">Select your Gender</td>
    <td>
	Male<input type="radio" name="g" value="m"/>
	Female<input type="radio" name="g" value="f"/>
	</td>
  </tr>	
  <!taking your mail id and it defined as e>	
  <tr>
    <td>Enter your Email</td>
    <td><input type="email" name="e"/></td>
  </tr>
 <!give your password for mentioned mail and it defined as p>	
  <tr>
    <td>Enter your Password</td>
    <td><input type="password" name="p"/></td>
  </tr>
  <!taking DOB details > 	
  <tr>
    <td>Select your DOB</td>
    <td> 
	        <!month option>
		<select name="mm">
			<option value="">Month</option>
			<?php 
			for($i=1;$i<=12;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
	        <!days option>
		<select name="dd">
			<option value="">Date</option>
			<?php 
			for($i=1;$i<=31;$i++)
			{
			echo "<option value='$i'>".$i."</option>";
			}
			?>
		</select>
	        <!years option>
		<select name="yy">
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
  <! colspan : it can used to specifiy the number of columns a cell should span>	
  <tr>
    <td colspan="2" align="center">
	<input type="submit" name="save" value="Register Me"/>
	<input type="reset" value="Reset"/>
	</td>
  </tr>
</table>
</form>
</body>
</html>
