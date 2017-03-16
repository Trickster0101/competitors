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
          echo "<td><button><a href='../branches-list/branch-list-table.php?competitors_id=$row[competitors_id]'>VIEW BRANCHES</button></td>";
          echo "<td><button><a href='../map/map-competitor-branches.php?competitors_id=$row[competitors_id]'>VIEW BRANCHES ON MAP</button></td>";
          echo "<td><a href='edit-competitor.php?competitors_id=$row[competitors_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
          echo "<td><a href='remove-competitor.php?competitors_id=$row[competitors_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
