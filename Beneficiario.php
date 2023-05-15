<?php
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);


$sql = "SELECT codigo FROM beneficiarios ORDER BY id DESC LIMIT 1";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Último código de beneficiario: " . $row["codigo"];
  }
} else {
  echo "0 results";
}
$mysqli->close();
?>
