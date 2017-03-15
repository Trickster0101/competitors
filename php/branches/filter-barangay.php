<?php
  include '../php/database.php';
  $select = "select DISTINCT branch_barangay from branches where is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $branch_id = $row['branch_id'];
      $branch_barangay = $row['branch_barangay'];

      echo "<tbody>";
        echo "<tr>";
          echo "<td>$branch_barangay</td>";
          echo "<td><button><a href='branch-list-table-barangay.php?branch_id=$row[branch_barangay]'>VIEW BRANCHES</button></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
