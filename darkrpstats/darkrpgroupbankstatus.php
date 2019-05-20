<TITLE>Gmod bank group info</TITLE>
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
$dbname = "darkrpbank";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Name, Money, Rank FROM arcbank_group_account";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
echo "<table><tr> <th> Name </th> <th> Money </th> <th> Rank </th> </tr>";
while($row = $result->fetch_assoc()) {
        echo "<tr><th>",  $row["Name"],  "</th><th>", $row["Money"],  "</th><th>", $row["Rank"], "</th><tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>