<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Admin</title>
<?php  include('inc.header.php'); ?>
</head>
<body>
<?php include('inc.nav.php'); include('inc.sql.php'); ?>
<div class="main" style="min-height: 100%; z-index: 1">
<div class="main-inner">
  <div class="container">


<?php 
	  //aktualisieren
	  if (isset($_GET['aktualisieren'])){
		  $db_query = "UPDATE 
		  				`phrases` SET 
							`name` = '" . $_GET['name'] . "', 
							`text` = '" . $_GET['text'] . "', 
							`insertdate` = NOW(),
							`lattitute` = '" . $_GET['lattitute'] . "', 
							`longitude` = '" . $_GET['longitude'] . "'
						
						WHERE `ID` = " . $_GET['akt_ID'] ;
     	$update_result = $link->query($db_query);
	  }
	  
	  //Prüfen ob ausgeloggt werden soll
	  if($_GET['logout']=='true'){
		  session_destroy();
		  echo '<meta http-equiv="refresh" content="0; URL=login.php">';
		  die();
	  }
	  
	  //Püfen ob der User eingeloggt ist
	  if (!isset($_SESSION['user261290'])){
		  echo '<meta http-equiv="refresh" content="0; URL=login.php">';
		  die();
	  }
	  
	  if(isset($_GET['delete'])){
		  $db_query = "DELETE FROM `phrases` WHERE `ID` = " . $_GET['delete'] ;
    		$delete_result = $link->query($db_query);    
	  }
	  
	  //Phrasen aus der DB holen
	  $db_query = "SELECT
                             ID,
							 pic,
							 name,
							 text,
							 DATE_FORMAT(insertdate, '%d.%m.%Y %H:%i' ) as datum,
							 lattitute,
							 longitude
                     FROM
                             phrases
					ORDER BY 
							insertdate DESC
                    ";
            $result = $link->query($db_query);
	  
	  while($row = mysqli_fetch_assoc($result))
				{		  
		 //Prüfen ob der Eintrag aktualisiert wurde
		  $akt_info = "";
		  if ($_GET['akt_ID']==$row['ID']){
			  $akt_info = '<span style="color: green"> Erfolgreich aktualisiert!</span>';
		  }
	  ?>
	  
              <ul class="messages_layout">
                <li class="from_user left"> <a href="#" class="avatar"><img src="bootstrap_responsive_admin_template/img/<?php echo $row['pic']; ?>"/></a>
                  <div class="message_wrap" id="<?php echo $row['ID']; ?>">
                    <div class="info"> <a class="name"><?php echo $row['name']; ?></a> <span class="time"><?php echo $row['datum']; ?>
						<strong>lat: </strong><?php echo $row['lattitute']; ?> | <strong>lng: </strong><?php echo $row['longitude']; ?></span>
						&nbsp;&nbsp;<?php echo $akt_info; ?>
					
					<div class="dropdown pull-right"> <a class="dropdown-toggle " id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#"> <i class=" icon-caret-down"></i> </a>
                          <ul class="dropdown-menu " role="menu" aria-labelledby="dLabel">
							<li>
							<a href="admin.php?edit=<?php echo $row['ID'].'#'.$row['ID'] ?>"> <i class=" icon-pencil "></i> Bearbeiten</a></li>
                            <li><a href="admin.php?delete=<?php echo $row['ID']; ?>"><i class=" icon-trash icon-large"></i> Löschen</a></li>
							
                          </ul>
                        </div>	
					
                      <div class="options_arrow">
                        <div class="dropdown pull-right">
                        </div>
                      </div>
                    </div>
					  <?php
		  			if($_GET['edit'] == $row['ID']){
						echo '<form method="get" action="admin.php?aktualisieren='.$row['ID'].'"><br>
						<input required style="width: 250px" type="text" name="name" value="'.$row['name'].'"><br>
						<input required style="width: 250px" type="text" name="text" value="'.$row['text'].'"><br>
						<input required style="width: 250px" type="text" name="lattitute" value="'.$row['lattitute'].'"><br>
						<input required style="width: 250px" type="text" name="longitude" value="'.$row['longitude'].'"><br>
						<input  type="hidden" name="akt_ID" value="'.$_GET['edit'].'">
						<input type="submit" name="aktualisieren" value="aktualisieren">';
					}
		  			else {
						echo '<div class="text">'.$row['text'].'</div>';
					}
					?>
                  </div>
                </li>
              </ul>
		<?php } ?>
	  
  </div><!-- /container -->
</div><!-- /main-inner -->
</div><!-- /main -->
<?php include('inc.footer.php'); ?>
</body>
</html>
