<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/map/map.css?version=76" />

	<script src="../js/jquery-3.1.1.min.js"></script>

</head>

<body>
  <div class="body-holder">

		<!--Admin Panel Header -->
    <header class="row header">
      <div class="col-12 col-m-12">
        <h1>HELLO, ADMIN!</h1>
      </div>
    </header>
    <!-- End of Admin Panel Header -->

		<div class="row">
			<div class="col-12 col-m-12">
				<div id="googleMap" style="width:100%;height:400px;"></div>
			</div>
		</div>
  </div>
</body>

<script>
function myMap() {
var mapProp= {
    center:new google.maps.LatLng(51.508742,-0.120850),
    zoom:5,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq0UZlyRovgZQ13K8um7Mwo60809NKoPM&callback=myMap"></script>

</html>
