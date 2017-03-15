<?php
  include '../php/database.php';
  $select = "select DISTINCT branch_city from branches where is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $branch_id = $row['branch_id'];
      $branch_city = $row['branch_city'];

      echo "<tbody>";
        echo "<tr>";
          echo "<td>$branch_city</td>";
          echo "<td><button><a href='branch-list-table-city.php?branch_id=$row[branch_city]'>VIEW BRANCHES</button></td>";
          echo "<td><button><a href='../map/map-city-branches.php?branch_id=$row[branch_city]'>VIEW BRANCHES ON MAP</button></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
