<?php
  if(isset($_POST['submit-branches']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'competitors';

    $conn = new mysqli($server, $username, $password, $dbname);

    $branch_name = $_POST['branch_name'];
    $branch_address = $_POST['branch_address'];
    $branch_city = $_POST['branch_city'];
    $branch_barangay = $_POST['branch_barangay'];
    $branch_telephone = $_POST['branch_telephone'];
    $branch_cellphone = $_POST['branch_cellphone'];
    $competitor_id = $_POST['competitor_id'];

    $log = "Added Branch";

    $branch_name = mysqli_real_escape_string($conn, $branch_name);
    $branch_address = mysqli_real_escape_string($conn, $branch_name);
    $branch_city = mysqli_real_escape_string($conn, $branch_city);
    $branch_barangay = mysqli_real_escape_string($conn, $branch_barangay);
    $log = mysqli_real_escape_string($conn, $log);

    $query = "INSERT INTO branches(branch_name, branch_address, branch_city, branch_barangay, branch_telephone, branch_cellphone, competitor_id)
    VALUES('$branch_name', '$branch_address', '$branch_city', '$branch_barangay', '$branch_telephone', '$branch_cellphone', '$competitor_id');";

    $query .= "INSERT INTO logfiles(log_description) VALUES('$log')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" .mysqli_error($conn);
    }
    else
    {
      header("location: ../../branches-list/branches-list.php");
      exit();
    }
  }
?>
