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
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/competitor-list.css?version=97" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <nav id="mySidenav" class="sidenav">
		<div class="row">
      <div class="col-12 col-m-12">
        <h2>Control Panel</h2>
      </div>
    </div>

		<ul class="topnav">
			<li><a href="competitor-list.php" class="borderTop">View Competitor</a></li>
    	<li><a href="add-competitor.php">Add Competitor</a></li>
			<li><a href="../branches-list/branch-list.php">View Branches</a></li>
      <li><a href="../branches-list/add-branches.php">Add Branches</a></li>
			<li><a href="../map/map-index.php">View Map</a></li>
		</ul>
  </nav>

	<div class="body-table-holder">
    <!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

		<div class="row">
			<div class="col-12 col-m-12">
				<div class="table-responsive">
				  <table class="table">
				    <thead>
				      <tr>
				        <th>Name</th>
				        <th>View Branches</th>
				        <th>View Branches On Map</th>
								<th>EDIT</th>
								<th>REMOVE</th>
							</tr>
				    </thead>

				    <?php include '../php/competitor/fetch-competitor.php'; ?>

				  </table>
			  </div>
			</div>
		</div>

  </div>

</body>

</html>
