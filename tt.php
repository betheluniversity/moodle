<?php
echo "test";

$dbhost    = 'moodledev-20180205.cpxu0frrf8e8.us-east-1.rds.amazonaws.com';
$dbname    = 'moodle_dev';
$dbuser    = 'moodle_admin';
$dbpass    = 'wZGFUYXb8RWUfY76MB3G';

// Create connection
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$sql = "SELECT COUNT(*) from mdl_config";
$result = $conn->query($sql);
echo "<pre>";
print_r($result);
echo "</pre>";

while ($row = $result->fetch_array()){
   print_r($row);

}
$result->free();
$conn->close();

?>
