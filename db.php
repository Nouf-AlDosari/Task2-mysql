
<?php
$host = "localhost";
$user = "root"; // تعديل إذا لزم
$password = ""; // تعديل إذا لزم
$dbname = "mydb";

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
