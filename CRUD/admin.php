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
	  if(isset($_GET['success'])){
		  echo '<div class="alert alert-success">                                                  <button type="button" class="close" data-dismiss="alert">&times;</button>                <strong>Super!</strong> Der Eintrag war erfolgreich.
        </div>';
	  }
	  
	  //Phrasen aus der DB holen
	  $db_query = "SELECT
                             ID,
							 name,
							 text,
							 DATE_FORMAT(insertdate, '%d.%m.%Y %H:%i' ) as datum
                     FROM
                             phrases
					ORDER BY 
							insertdate DESC
                    ";
            $result = $link->query($db_query);
	  
	  while($row = mysqli_fetch_assoc($result))
				{
		$bild = 'message_avatar'.rand(0,11).'.jpg';
	  ?>
	  
              <ul class="messages_layout">
                <li class="from_user left"> <a href="#" class="avatar"><img src="bootstrap_responsive_admin_template/img/<?php echo $bild; ?>"/></a>
                  <div class="message_wrap">
                    <div class="info"> <a class="name"><?php echo $row['name']; ?></a> <span class="time"><?php echo $row['datum']; ?></span>
                      <div class="options_arrow">
                        <div class="dropdown pull-right">
                        </div>
                      </div>
                    </div>
                    <div class="text"><?php echo $row['text']; ?></div>
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
