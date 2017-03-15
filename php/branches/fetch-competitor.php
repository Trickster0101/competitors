<?php
  include '../php/database.php';
  $select = "select * from competitors where is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $competitor_id = $row['competitors_id'];
      $competitor_name = $row['competitors_name'];

      echo "<tbody>";
        echo "<tr>";
          echo "<td>$row[competitors_name]</td>";
          echo "<td><button><a href='branch-list-table.php?competitors_id=$row[competitors_id]'>VIEW BRANCHES</button></td>";
          echo "<td><button><a href='../map/map-competitor-branches.php?competitors_id=$row[competitors_id]'>VIEW BRANCHES ON MAP</button></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
