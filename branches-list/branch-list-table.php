<?php
	session_start();
?>

<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/competitor-list.css?version=76" />
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
	        <h2>Control Panel</h2>
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

    <!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

		<div class="row">
			<form role="form" action="branch-list-table.php" method="POST">
				<div class="col-12 col-m-12" style="padding: 5%;">
					<div class="form-group input-group col-md-8 col-md-offset-3">
						<input type="text" name="filter_name" class="form-control" placeholder="Search by Name, Barangay, City" />
						<span class="input-group-btn">
							<button type="submit" class="btn btn-primary" name="branch_name">
								<i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp;Name
							</button>
							<button type="submit" class="btn btn-primary" name="barangay">
								<i class="fa fa-search"></i>&nbsp;&nbsp;Barangay
							</button>
							<button type="submit" class="btn btn-primary" name="city">
								<i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp;City
							</button>
							<button type="submit" class="btn btn-primary" name="view">
								<i class="fa fa-gear fa-spin"></i>&nbsp;&nbsp;View All
							</button>
						</span>
					</div>
				</div>
			</form>
		</div>

		<div class="row">
			<div class="col-12 col-m-12">
				<div class="table-responsive">
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Competitor</th>
				        <th>Name</th>
								<th>Address</th>
								<th>City</th>
								<th>Barangay</th>
								<th>Tel</th>
								<th>Cell</th>
				        <th>Map</th>
								<th>EDIT</th>
								<th>REMOVE</th>
							</tr>
				    </thead>

						<?php
							if($_SESSION["competitors_id"] == null)
							{
								$_SESSION["competitors_id"] = $_GET['competitors_id'];
							}
							else {
								# code...
							}
						?>

				    <?php include '../php/branches/search-filter.php'; ?>

				  </table>
			  </div>
			</div>
		</div>

  </div>

</body>

</html>
