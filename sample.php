<?php
extract($_POST);
$conn = new mysqli("localhost:3306","root","Keerthi@2001","student");
extract($_POST);
if(isset($save))
{
$sql = "SELECT id,name,roll FROM studentdetails WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["roll"]. "<br>";
  }
} else {
  echo "0 results";
}
}
$conn->close();
?>
