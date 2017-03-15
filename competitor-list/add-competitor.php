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
  <link rel="stylesheet" type="text/css" href="../css/form.css?version=1" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script src="js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="fullscreen body-holder">

    <nav id="mySidenav" class="sidenav">
			<div class="row">
				<div class="col-12 col-m-12">
		      <img class="logo" src="../img/budgetbotika_logo .png"/>
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


    <div class="row">
			<div class="body-page">
        <form id="post-form" action="../php/competitor/add-competitor.php" method="post">
    			<div class="row">
						<div class ="post-form">
    					<label class="label-style">Competitor Name</label>
    					<input class="form-control" type="text" name="competitor_name" required>
    			</div>
				</div>
    			<div class="row">
					<div class="post-form">
    					<input class="save-publish" type="submit" name="submit-competitor">
    			</div>
    		</form>
			</div>
    </div>
  </div>

</body>

</html>
