<TITLE>Gmod player info</TITLE>
<html><head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132581402-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132581402-1');
</script>
  <link rel="stylesheet" href="../tablestyles.css">
</head>
<?php
$servername = "192.168.178.90";
$username = "darkrp";
$password = "redacted";
$dbname = "darkrp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT rpname, salary, wallet FROM darkrp_player";
$result = $conn->query($sql);

if ($result->num_rows > 4) {
    // output data of each row
echo "<table><tr> <th> RPName </th> <th> Salary </th> <th> Wallet </th> </tr>";
while($row = $result->fetch_assoc()) {
        echo "<tr><th>",  $row["rpname"],  "</th><th>", $row["salary"],  "</th><th>", $row["wallet"], "</th><tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>