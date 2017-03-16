<?php
session_start();
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'competitors';

// Opens a connection to a MySQL server

$conn = new mysqli($server, $username, $password, $dbname);
if (!$conn) {  die('Not connected : ' . mysqli_error($conn));
}

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Select all the rows in the markers table
$branch_city = $_SESSION["branch_id"];

$query = "SELECT * FROM branches b, competitors c where b.branch_id = '$_SESSION[branch_id]' && b.is_active = 1 && c.is_active = 1 && b.competitor_id = c.competitors_id";
$result = mysqli_query($conn, $query);
if (!$result) {
  die('Invalid query: ' . mysqli_error($conn));
}

header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = @mysqli_fetch_assoc($result)){
  // Add to XML document node
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("competitor",utf8_encode($row['competitors_name']));
  $newnode->setAttribute("name",utf8_encode($row['branch_name']));
  $newnode->setAttribute("address",utf8_encode($row['branch_address']));
  $newnode->setAttribute("lat", utf8_encode($row['branch_latitude']));
  $newnode->setAttribute("lng", utf8_encode($row['branch_longitude']));
}

echo $dom->saveXML();
?>
