<?php
// Replace these with your database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "challan";

// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL query to retrieve the latest 3 challan details
$sql = "SELECT * FROM generate ORDER BY id DESC LIMIT 10";

// Execute the query
$result = mysqli_query($connection, $sql);

$data = array();

// Fetch and store the data in an array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the database connection
mysqli_close($connection);

// Return the data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
