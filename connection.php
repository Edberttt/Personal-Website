
<?php
$serverName = "localhost";
$username = "root";
$password = "";
$dbName = "db_personalweb";

$conn = new mysqli($serverName, $username, $password, $dbName);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully ";

?>