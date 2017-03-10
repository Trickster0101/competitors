<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/competitor-list.css?version=75" />
  <link rel="stylesheet" type="text/css" href="../css/form.css?version=75" />

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
				<li><a href="view-competitor-list.php" class="borderTop">View Competitor</a></li>
      	<li><a href="add-competitor.php">Add Competitor</a></li>
	      <li><a href="add-branches.php">Add Branches</a></li>
	      <li><a href="remove-competitor.php">Remove Competitor</a></li>
	      <li><a href="remove-branches.php">Remove Branches</a></li>
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

        <form id="post-form" action="../php/competitor/add-competitor.php" method="post">
    			<div class="row post-form">
    				<div class="col-12 col-m-12">
    					<label class="label-style">Competitor Name</label>
    					<input type="text" name="competitor_name" required>
    				</div>
    			</div>

    			<div class="row post-form">
    				<div class="col-12 col-m-12">
    					<input class="save-publish" type="submit" name="submit-competitor">
    				</div>
    			</div>
    		</form>

      </div>
    </div>
  </div>

</body>

</html>
