<?php
  include '../php/database.php';

  if(isset($_POST['branch_name']))
  {
    $filter_name = $_POST['filter_name'];
    $branch_id = $_SESSION["branch_id"];

    $filter_name = mysqli_real_escape_string($conn, $filter_name);

    $select = "select * from competitors c, branches b where b.branch_city = '$branch_id' && b.branch_name = '$filter_name' && b.competitor_id = c.competitors_id && c.is_active = 1 && b.is_active = 1";
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
            echo "<td>$row[branch_city]</td>";
            echo "<td>$row[branch_barangay]</td>";
            echo "<td>$row[branch_telephone]</td>";
            echo "<td>$row[branch_cellphone]</td>";
            echo "<td><button><a href='../map/map-branch.php?branch_id=$row[branch_id]'>MAP VIEW</a></button></td>";
            echo "<td><a href='edit-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='remove-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
          echo "</tr>";
        echo "</tbody>";
      }
    }
    else {
      echo "Nothing";
    }
  }

  else if(isset($_POST['barangay']))
  {
    $filter_name = $_POST['filter_name'];
    $branch_id = $_SESSION["branch_id"];

    $filter_name = mysqli_real_escape_string($conn, $filter_name);

    $select = "select * from competitors c, branches b where b.branch_city = '$branch_id' && b.branch_barangay = '$filter_name' && b.competitor_id = c.competitors_id && b.is_active = 1 && c.is_active = 1";
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
            echo "<td>$row[branch_city]</td>";
            echo "<td>$row[branch_barangay]</td>";
            echo "<td>$row[branch_telephone]</td>";
            echo "<td>$row[branch_cellphone]</td>";
            echo "<td><button><a href='../map/map-branch.php?branch_id=$row[branch_id]'>MAP VIEW</a></button></td>";
            echo "<td><a href='edit-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='remove-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
          echo "</tr>";
        echo "</tbody>";
      }
    }
    else {
      echo "Nothing";
    }
  }

  else if(isset($_POST['city']))
  {
    $filter_name = $_POST['filter_name'];
    $branch_id = $_SESSION["branch_id"];

    $filter_name = mysqli_real_escape_string($conn, $filter_name);

    $select = "select * from competitors c, branches b where b.branch_city = '$branch_id' && b.branch_city = '$filter_name' && b.competitor_id = c.competitors_id && b.is_active = 1 && c.is_active = 1";
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
            echo "<td>$row[branch_city]</td>";
            echo "<td>$row[branch_barangay]</td>";
            echo "<td>$row[branch_telephone]</td>";
            echo "<td>$row[branch_cellphone]</td>";
            echo "<td><button><a href='../map/map-branch.php?branch_id=$row[branch_id]'>MAP VIEW</a></button></td>";
            echo "<td><a href='edit-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='remove-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
          echo "</tr>";
        echo "</tbody>";
      }
    }
    else {
      echo "Nothing";
    }
  }
  else if(isset($_POST['export_excel']))
  {
    $branch_id = $_SESSION["branch_id"];

    $select = "select * from competitors c, branches b where b.branch_city = '$branch_id' && b.competitor_id = c.competitors_id && b.is_active = 1 && c.is_active = 1";
    $result=mysqli_query($conn,$select);

    if ($result->num_rows > 0)
    {
      $output .='<table class="table" border="1">
        <tr>
          <th>Competitor Name</th>
          <th>Branches</th>
          <th>Address</th>
          <th>Telephone Number</th>
          <th>Cellphone Number</th>
        </tr>';
        while ($row = mysqli_fetch_array($result))
        {
          $output .=
          '
          <tr>
            <td>'.$row["competitors_name"].'</td>
            <td>'.$row["branch_name"].'</td>
            <td>'.$row["branch_address"].'</td>
            <td>'.$row["branch_telephone"].'</td>
            <td>'.$row["branch_cellphone"].'</td>
          </tr>
          ';
        }
        $output .= '</table>';
        ob_end_clean();
        header("Content-Type: application/vnd.ms-excel");
        header("Content-Disposition: attachment; filename=city-branches.xls");
        echo $output;
    }
  }
  else
  {
    $branch_id = $_SESSION["branch_id"];

    $select = "select * from competitors c, branches b where b.branch_city = '$branch_id' && b.competitor_id = c.competitors_id && b.is_active = 1 && c.is_active = 1";
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
            echo "<td>$row[branch_city]</td>";
            echo "<td>$row[branch_barangay]</td>";
            echo "<td>$row[branch_telephone]</td>";
            echo "<td>$row[branch_cellphone]</td>";
            echo "<td><button><a href='../map/map-branch.php?branch_id=$row[branch_id]'>MAP VIEW</a></button></td>";
            echo "<td><a href='edit-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-edit'></span></a></td>";
            echo "<td><a href='remove-branch.php?branch_id=$row[branch_id]'><span class='glyphicon glyphicon-remove'></span></a></td>";
          echo "</tr>";
        echo "</tbody>";
      }
    }
    else {
      echo "Nothing";
    }
  }
?>
