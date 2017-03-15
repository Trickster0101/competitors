<!DOCTYPE html>

<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<head>
	<title>Competitors</title>
	<!-- <link rel="icon"  type="image/png" href="../images/UPEAST/UPEAST LOGO vertical copy2.png" /> -->
  <!-- Sidebar Style CSS -->
	<link rel="stylesheet" type="text/css" href="../css/competitor-list/competitor-list-new.css?version=1" />
	<link rel="stylesheet" type="text/css" href="../css/form.css?version=75" />
	<link rel="stylesheet" type="text/css" href="../css/map/map.css?version=1.1" />

	<script src="../js/jquery-3.1.1.min.js"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
  <div class="body-holder">

		<!--Admin Panel Header -->
    <header class="row header">
			<a href="../index.php"><span class="glyphicon glyphicon-menu-left"></span></a>
        <img class="logo" src="../img/budgetbotika_logo .png"/>
    </header>
    <!-- End of Admin Panel Header -->

				<div id="map" style="height: 90%; width: 100%;">
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
					      downloadUrl('example.php', function(data) {
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
</body>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCq0UZlyRovgZQ13K8um7Mwo60809NKoPM&callback=initMap"></script>

</html>
