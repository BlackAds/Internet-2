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
	  
<?php
	  //Phrasen aus der DB holen
	  $db_query = "SELECT
                             ID,
							 pic,
							 name,
							 text,
							 DATE_FORMAT(insertdate, '%d.%m.%Y %H:%i' ) as datum,
							 lattitute as lat,
							 longitude as lng
                     FROM
                             phrases
					WHERE 
							ID = '".$_GET['ID']."'
                    ";
            $result = $link->query($db_query);
	  
	  $row = mysqli_fetch_assoc($result);
;
?>

<div class="plan-actions">				
	<a href="index.php#<?php echo $_GET['ID']; ?>" class="btn"><i class="icon-large icon-arrow-left
"></i> Zurück zur Liste</a>				
</div> <!-- /plan-actions -->
	 
	  <br>
    <!--The div element for the map -->
    <div id="map"></div> 
<script>
	
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: <?php echo $row['lat']; ?>, lng: <?php echo $row['lng']; ?>};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
	
var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<ul class="messages_layout">'+
          '<li class="from_user left"> <a href="#" class="avatar"><img src="bootstrap_responsive_admin_template/img/<?php echo $row['pic']; ?>"/></a>'+
                  '<div class="message_wrap" style="border: 0px; box-shadow: none">'+
                    '<div class="info"> <a class="name"><?php echo $row['name']; ?></a> <span class="time"><?php echo $row['datum']; ?></span>'+
					 '<div class="options_arrow">'+
                        '<div class="dropdown pull-right">'+
                        '</div>'+
                      '</div>'+
                    '</div>'+
                    '<div class="text"><?php echo $row['text']; ?></div>'+
                  '</div>'+
                '</li>'+
              '</ul>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });

  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    title: 'Uluru (Ayers Rock)'
  });
  google.maps.event.addListener(marker, 'click', function() {
   infowindow.open(map,marker);
});

infowindow.open(map,marker);
	
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
