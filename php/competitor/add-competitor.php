<?php
  if(isset($_POST['submit-competitor']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'competitors';

    $conn = new mysqli($server, $username, $password, $dbname);

    $competitor_name = $_POST['competitor_name'];

    $competitor_name = mysqli_real_escape_string($conn, $competitor_name);

    $query = "INSERT INTO competitors(competitors_name, is_active) VALUES('$competitor_name', 1);";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../../competitor-list/competitor-list.php");
      exit();
    }
  }
?>
