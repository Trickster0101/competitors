<?php

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

$query = "SELECT * FROM branches where is_active = 1";
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
  $newnode->setAttribute("name",utf8_encode($row['branch_name']));
  $newnode->setAttribute("address",utf8_encode($row['branch_address']));
  $newnode->setAttribute("lat", utf8_encode($row['branch_latitude']));
  $newnode->setAttribute("lng", utf8_encode($row['branch_longitude']));
  $newnode->setAttribute("type", utf8_encode($row['type']));
}

echo $dom->saveXML();

?>
