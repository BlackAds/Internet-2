<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Standort-Detail</title>
<?php  include('inc.header.php'); ?>
	
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
	
</head>
<body>
<?php include('inc.nav.php'); include('inc.sql.php'); ?>
<div class="main" style="min-height: 100%; z-index: 1">
<div class="main-inner">
  <div class="container">

<div class="plan-actions">				
	<a href="phrasen.php#<?php echo $_GET['backlinkID']; ?>" class="btn"><i class="icon-large icon-arrow-left
"></i> Zurück zur Liste</a>				
</div> <!-- /plan-actions -->
	 
	  <br>
    <!--The div element for the map -->
    <div id="map"></div> 
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo $_GET['lat']; ?>, lng: <?php echo $_GET['lat']; ?>};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
	  
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7Mr_2_IA7KkzFQJGalFY2BOkg_J_4Ee0&callback=initMap">
    </script>
	  
  </div><!-- /container -->
</div><!-- /main-inner -->
</div><!-- /main -->
<?php include('inc.footer.php'); ?>
</body>
</html>
