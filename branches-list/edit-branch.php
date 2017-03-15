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

    <!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

    <div class="row body-page">
      <div class="col-12 col-m-12 container">
				<?php include '../php/branches/filter-branch.php' ?>;
        <form id="post-form" action="../php/branches/edit-branches.php" method="post">
    			<div class="row post-form">
						<div class="col-12 col-m-12">
    					<input type="number" name="branch_id" value="<?php echo $branch_id; ?>" style="display:none;">
    				</div>

    				<div class="col-12 col-m-12">
    					<label class="label-style">Branch Name</label>
    					<input type="text" name="branch_name" value="<?php echo $branch_name; ?>">
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Branch Address</label>
    					<input type="text" name="branch_address" value="<?php echo $branch_address; ?>" required>
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Branch City</label>
    					<input type="text" name="branch_city" value="<?php echo $branch_city; ?>" required>
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Branch Barangay</label>
    					<input type="text" name="branch_barangay" value="<?php echo $branch_barangay; ?>" required>
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Branch Telephone</label>
    					<input type="number" name="branch_telephone" value="<?php echo $branch_telephone; ?>">
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Branch Cellphone</label>
    					<input type="number" name="branch_cellphone" value="<?php echo $branch_cellphone; ?>">
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Latitude</label>
    					<input type="number" name="branch_lat" step="any" value="<?php echo $branch_latitude; ?>">
    				</div>

						<div class="col-12 col-m-12">
    					<label class="label-style">Longitude</label>
    					<input type="number" name="branch_long" step="any" value="<?php echo $branch_longitude; ?>">
    				</div>
    			</div>

    			<div class="row post-form">
    				<div class="col-12 col-m-12">
    					<input class="save-publish" type="submit" name="submit-branches" value="Edit Branch">
    				</div>
    			</div>
    		</form>

      </div>
    </div>
  </div>

</body>

</html>
