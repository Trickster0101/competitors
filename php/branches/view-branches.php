<?php
  include '../php/database.php';
  $competitors_id = $_SESSION["competitors_id"];
  $select = "select * from competitors c, branches b where b.competitor_id = $competitors_id && b.competitor_id = c.competitors_id && c.is_active = 1 && b.is_active = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $competitor_name = $row['competitors_name'];
      $branch_name = $row['branch_name'];
      $branch_address = $row['branch_address'];
      $branch_city = $row['branch_city'];
      $branch_barangay = $row['branch_barangay'];
      $branch_telephone = $row['branch_telephone'];
      $branch_cellphone = $row['branch_cellphone'];

      echo "<tbody>";
        echo "<tr>";
          echo "<td>$row[competitors_name]</td>";
          echo "<td>$row[branch_name]</td>";
          echo "<td>$row[branch_address]</td>";
          echo "<td>$row[branch_telephone]</td>";
          echo "<td>$row[branch_cellphone]</td>";
          echo "<td><button>VIEW ON MAP</button></td>";
          echo "<td><a href='edit-competitor.php?competitors_id=$row[competitors_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
          echo "<td><a href='edit-competitor.php?competitors_id=$row[competitors_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
        echo "</tr>";
      echo "</tbody>";
    }
  }
  else {
    echo "Nothing";
  }
?>
