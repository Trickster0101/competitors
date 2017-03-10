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
          echo "<td>"; echo $competitor_id; "</td>";
          echo "<td>"; echo $competitor_name; "</td>";
          echo "<td><button>VIEW BRANCHES</button></td>";
          echo "<td><button>VIEW ON MAP</button></td>";
          echo "<td><a href='edit-competitor.php?competitors_id=$row[competitors_id]>EDIT</a></td>";
          echo "<td><a href='edit-competitor.php?competitors_id=$row[competitors_id]>REMOVE</a></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
