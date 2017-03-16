<?php
  if(isset($_POST['submit-branches']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'competitors';

    $conn = new mysqli($server, $username, $password, $dbname);

    $branch_id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $branch_city = $_POST['branch_city'];
    $branch_barangay = $_POST['branch_barangay'];
    $branch_telephone = $_POST['branch_telephone'];
    $branch_cellphone = $_POST['branch_cellphone'];
    $branch_latitude = $_POST['branch_lat'];
    $branch_longtitude = $_POST['branch_long'];

    $branch_name = mysqli_real_escape_string($conn, $branch_name);
    $branch_address = mysqli_real_escape_string($conn, $branch_address);
    $branch_city = mysqli_real_escape_string($conn, $branch_city);
    $branch_barangay = mysqli_real_escape_string($conn, $branch_barangay);

    $query = "UPDATE branches set branch_name = '$branch_name', branch_address = '$branch_address', branch_city = '$branch_city', branch_barangay = '$branch_barangay', branch_telephone = '$branch_telephone', branch_cellphone = '$branch_cellphone', branch_latitude = '$branch_latitude', branch_longitude = '$branch_longitude' where branch_id = $branch_id";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" .mysqli_error($conn);
    }
    else {
      header("location: ../../competitor-list/competitor-list.php");
      exit();
    }
  }
?>
