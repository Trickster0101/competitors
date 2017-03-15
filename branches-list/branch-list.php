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

  <div class="body-table-holder">
				<div class="row">
					<div class="col-12 col-m-12">
						<div class="panel panel-primary">
				      <div class="panel-heading">List of Competitors</div>
				      <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered table-hover">
								    <thead>
								      <tr>
								        <th>Name</th>
								        <th>View Branches</th>
												<th>View Branches on Map</th>
											</tr>
								    </thead>

								    <?php include '../php/branches/fetch-competitor.php'; ?>

								  </table>
							  </div>
							</div>
				    </div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-m-12">
						<div class="panel panel-primary">
				      <div class="panel-heading">List of City</div>
				      <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered table-hover">
								    <thead>
								      <tr>
								        <th>City</th>
								        <th>View Branches</th>
												<th>View City on Map</th>
											</tr>
								    </thead>

								    <?php include '../php/branches/filter-city.php'; ?>

								  </table>
							  </div>
							</div>
				    </div>
					</div>
				</div>

				<div class="row">
					<div class="col-12 col-m-12">
						<div class="panel panel-primary">
				      <div class="panel-heading">List of Barangay</div>
				      <div class="panel-body">
								<div class="table-responsive">
								  <table class="table table-bordered table-hover">
								    <thead>
								      <tr>
								        <th>Barangay</th>
								        <th>View Branches</th>
												<th>View Barangay on Map</th>
											</tr>
								    </thead>

								    <?php include '../php/branches/filter-barangay.php'; ?>

								  </table>
							  </div>
							</div>
				    </div>
					</div>
				</div>
  </div>

</body>

</html>
