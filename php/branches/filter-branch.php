<?php
  include '../php/database.php';
  $branch_id = $_GET['branch_id'];
  $select = "select * from branches where branch_id = $branch_id";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $competitor_name = $row['competitors_name'];
      $branch_id = $row['branch_id'];
      $branch_name = $row['branch_name'];
      $branch_address = $row['branch_address'];
      $branch_city = $row['branch_city'];
      $branch_barangay = $row['branch_barangay'];
      $branch_telephone = $row['branch_telephone'];
      $branch_cellphone = $row['branch_cellphone'];
      $branch_latitude = $row['branch_latitude'];
      $branch_longitude = $row['branch_longitude'];
    }
  }
  else {
    echo "Nothing";
  }
?>
