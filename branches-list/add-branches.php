<?php
	session_start();
	session_unset();
	$_SESSION["competitors_id"] = null;
	$_SESSION["branch_id"] = null;
?>
<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/competitor-list-new.css?version=1" />
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/control-panel.css?version=1" />
  <link rel="stylesheet" type="text/css" href="../css/form.css?version=78" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

    <nav id="mySidenav" class="sidenav">
			<div class="row">
	      <div class="col-12 col-m-12">
	        <img class="logo" src="../img/budgetbotika_logo .png"/>
	      </div>
	    </div>

			<ul class="topnav">
				<li><a href="../competitor-list/competitor-list.php" class="borderTop">View Competitor</a></li>
				<li><a href="../competitor-list/add-competitor.php">Add Competitor</a></li>
				<li><a href="branch-list.php">View Branches</a></li>
	      <li><a href="add-branches.php">Add Branches</a></li>
				<li><a href="../map/map-index.php">View Map</a></li>
			</ul>
    </nav>


    <div class="row">
			<div class= "body-page">

        <form id="post-form" action="../php/branches/add-branches.php" method="post">
    			<div class="row post-form">
    					<label class="label-style">Competitor Name</label>
							<select class="form-control" name="competitor_id" form="post-form" type="number">
							  <?php include '../php/branches/fetch-dropdown-values.php'; ?>
							</select>

    					<label class="label-style">Branch Name</label>
    					<input class="form-control" type="text" name="branch_name">

    					<label class="label-style">Branch Address</label>
    					<input class="form-control" type="text" name="branch_address" required>

    					<label class="label-style">Branch City</label>
    					<input class="form-control" type="text" name="branch_city" required>

    					<label class="label-style">Branch Barangay</label>
    					<input class="form-control" type="text" name="branch_barangay" required>

    					<label class="label-style">Branch Telephone</label>
    					<input class="form-control" type="number" name="branch_telephone">

    					<label class="label-style">Branch Cellphone</label>
    					<input class="form-control" type="number" name="branch_cellphone">

    					<label class="label-style">Latitude</label>
    					<input class="form-control" type="number" name="branch_lat" step="any">

    					<label class="label-style">Longitude</label>
    					<input class="form-control" type="number" name="branch_long" step="any">
    			</div>

    			<div class="row post-form">
    					<input class="save-publish" type="submit" name="submit-branches">
    			</div>
    		</form>

      </div>
    </div>
  </div>

</body>

</html>
