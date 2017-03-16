<?php
	session_start();
	$_SESSION["branch_id"] = null;
?>
<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/map/map.css?version=85" />

	<script src="../js/jquery-3.1.1.min.js"></script>

</head>

<body>
	<?php if($_SESSION["branch_id"] == null)
	{
		$_SESSION["branch_id"] = $_GET['branch_id'];
	}
	?>
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
				<div id="map" style="height: 500px; width: 100%;">
					<script>
					  var customLabel = {
					    restaurant: {
					      label: 'R'
					    },
					    bar: {
					      label: 'B'
					    }
					  };

					    function initMap() {
					    var map = new google.maps.Map(document.getElementById('map'), {
					      center: new google.maps.LatLng(12.8797, 121.7740),
					      zoom: 5
					    });
					    var infoWindow = new google.maps.InfoWindow;

					      // Change this depending on the name of your PHP or XML file
					      downloadUrl('view-barangay-on-map.php', function(data) {
					        var xml = data.responseXML;
					        var markers = xml.documentElement.getElementsByTagName('marker');
					        Array.prototype.forEach.call(markers, function(markerElem) {
					          var name = markerElem.getAttribute('competitor');
					          var address = markerElem.getAttribute('address');
					          var point = new google.maps.LatLng(
					              parseFloat(markerElem.getAttribute('lat')),
					              parseFloat(markerElem.getAttribute('lng')));

					          var infowincontent = document.createElement('div');
					          var strong = document.createElement('strong');
					          strong.textContent = name
					          infowincontent.appendChild(strong);
					          infowincontent.appendChild(document.createElement('br'));

					          var text = document.createElement('text');
					          text.textContent = address
					          infowincontent.appendChild(text);
					          var marker = new google.maps.Marker({
					            map: map,
					            position: point,
					          });
					          marker.addListener('click', function() {
					            infoWindow.setContent(infowincontent);
					            infoWindow.open(map, marker);
					          });
					        });
					      });
					    }



					  function downloadUrl(url, callback) {
					    var request = window.ActiveXObject ?
					        new ActiveXObject('Microsoft.XMLHTTP') :
					        new XMLHttpRequest;

					    request.onreadystatechange = function() {
					      if (request.readyState == 4) {
					        request.onreadystatechange = doNothing;
					        callback(request, request.status);
					      }
					    };

					    request.open('GET', url, true);
					    request.send(null);
					  }

					  function doNothing() {}
					</script>

				</div>
			</div>
		</div>
  </div>
</body>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq0UZlyRovgZQ13K8um7Mwo60809NKoPM&callback=initMap"></script>

</html>
