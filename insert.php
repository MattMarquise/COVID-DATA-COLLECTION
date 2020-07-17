<?php
$servername = "localhost";
$username = "Matthew";
$password = "Matt2702";
$db = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

echo htmlspecialchars($_POST['positive']);

$test = mysql_real_escape_string($_POST['positive']);

$query = "INSERT INTO syrvey (`positive`) VALUES ('".$test."')";

?>