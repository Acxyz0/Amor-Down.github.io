<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "amordown";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT codigo FROM beneficiarios ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Último código de beneficiario: " . $row["codigo"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>
