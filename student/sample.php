<?php
extract($_POST);
$conn = new mysqli("localhost:3306","root","Keerthi@2001","student");
extract($_POST);
if(isset($save))
{
$sql = "SELECT id,name,roll,branch,dob,email FROM studentdetails WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row--
echo  "<table border='1'>

<tr>

<th>Id</th>

<th>name</th>

<th>branch</th>

<th>dob</th>

<th>
email
</th>

</tr>";
  while($row = $result->fetch_assoc()) {
  //  echo " Name: " . $row["name"]. "<br> " ."Roll no:". $row["roll"]. "<br>"."Branch:".$row["branch"]."<br />";
        {

        echo "<tr>";

        echo "<td>" . $row['name'] . "</td>";

        echo "<td>" . $row['roll'] . "</td>";

        echo "<td>" . $row['branch'] . "</td>";

        echo "<td>" . $row['dob'] . "</td>";

        echo "<td>".$row['email']."</td>";
        echo "</tr>";

        }

      echo "</table>";
        }
} else {
  echo "0 results";
}
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<body>
<button onclick="window.location.href='register.php'">A</button>
<button onclick="window.location.href='register.php'">Sign Up</button>
</body>
</html>
