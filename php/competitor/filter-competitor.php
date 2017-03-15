<?php
  include '../php/database.php';
  $competitors_id = $_GET['competitors_id'];
  $select = "select * from competitors where competitors_id = $competitors_id";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $competitor_id = $row['competitors_id'];
      $competitor_name = $row['competitors_name'];
    }
  }
  else {
    echo "Nothing";
  }
?>
