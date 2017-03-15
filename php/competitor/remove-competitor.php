<?php
  if(isset($_POST['submit-competitor']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'competitors';

    $conn = new mysqli($server, $username, $password, $dbname);

    $competitor_id = $_POST['competitor_id'];
    $competitor_name = $_POST['competitor_name'];

    $competitor_name = mysqli_real_escape_string($conn, $competitor_name);

    $query = "UPDATE competitors set is_active = 0 where competitors_id = $competitor_id;";
    $query .= "UPDATE branches set is_active = 0 where competitor_id = $competitor_id";

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
