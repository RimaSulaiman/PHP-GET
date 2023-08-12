<html>
<body>

<?php

$name = $_GET['name'];


// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db1";


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tablee(namee) VALUES ('$name')";

if ($conn->query($sql) === TRUE) {
  echo  "successfully stored to the database";
} else {
    echo "Error storing list: " . $conn->error;
}

// Close the database connection
$conn->close();
?>


</body>
</html>

