<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Home</title>
<?php  include('inc.header.php'); ?>
</head>
<body>
<?php include('inc.nav.php'); include('inc.sql.php'); ?>
<div class="main" style="min-height: 100%; z-index: 1">
<div class="main-inner">
  <div class="container">

<?php
		  
	//Prüfen ob Eintrag gemacht werden soll
	if (isset($_POST['btn-save'])){
		
		if (empty($_POST['name'])){
			$name = 'Anonymous';
		}
		else {
		$name = $_POST['name'];
		}
		
	$text = "I Say YES! to " . $_POST['phrase1'] . " " .  $_POST['phrase2'] . " " . $_POST['phrase3'];
	
	$bild = 'message_avatar'.rand(0,11).'.jpg';	
		
	$db_query = "INSERT INTO
                       phrases
                            (pic,
							name,
							text,
							insertdate,
							lattitute,
							longitude
                            )
                    VALUES
                            ('".$bild."',
							'".$name."',
							'".$text."',
                             NOW(),
							 '".$_POST['lattitute']."',
							 '".$_POST['longitude']."'
							 
                            )
                   ";
            $result = $link->query($db_query);
		
	//Prüfen ob Fehler vorliegt
	$message = ""; 
      
      $errorText = mysqli_error($link);
      if (!empty($errorText)){ 
		//Gescheitert
        $message = $errorText;
		?>
	  	<div class="control-group">
		<label class="control-label" >Alerts</label>
		<div class="controls" >
		<div class="alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong >Warnung!</strong> <?php echo $message; ?>
        </div>
	  <?php
      }
      else {
		  //E-Mail Script
	include('inc.mail.php');
		  
		 //Erfolgreich
        $message = "Added phrase: " . $text . ". ";		
		echo '<meta http-equiv="refresh" content="0; URL=index.php?success">';
      }    
}
?>	  
	  
<div class="account-container">
	
<div class="content clearfix">
		
		<h1>Phrase erstellen</h1>		
			
			<div class="login-fields">
				
				<form method="post" action="phrasen.php">
				
				<div class="field">
				<input type="text" name="name" maxlength="100"  class="login username-field" placeholder="Gib dein Name ein">
				</div> <!-- /field -->
					
			</div> <!-- /login-fields -->
					
				<div class="field">
				<select name="phrase1" style="width: 100%">
                  <option value="unruhig">unruhig</option>
                  <option value="zweischneidig">zweischneidig</option>
                  <option value="synthetisch">synthetisch</option>
                  <option value="stilvoll">stilvoll</option>
                  <option value="schmutzig">schmutzig</option>
                  <option value="strategisch">strategisch</option>
                </select>
				</div> <!-- /field -->
					
				<div class="field">
				<select name="phrase2" style="width: 100%">
                  <option value="den Vorsprung">den Vorsprung</option>
                  <option value="die Mobilität">die Mobilität</option>
                  <option value="die hohe Flugebene">die hohe Flugebene</option>
                  <option value="die Schnittstellen">die Schnittstellen</option>
                  <option value="die Glatze">die Glatze</option>
					<option value="die Win-Win-Situation">die Win-Win-Situation</option>
                </select>
				</div> <!-- /field -->
					
				<div class="field">
				<select name="phrase3" style="width: 100%">
                  <option value="recyclen">recyclen</option>
                  <option value="highlighten">highlighten</option>
                  <option value="synchronisieren">synchronisieren</option>
                  <option value="auskegeln">auskegeln</option>
                  <option value="manipulieren">manipulieren</option>
                  <option value="pitchen">pitchen</option>
                </select>
				</div> <!-- /field -->
				
				
				
				<div class="field">
					<input required type="number" id="lattitude" name="lattitude" value="" placeholder="lattitute" class="login" style="width: 97%"/>
				</div> <!-- /field -->
				
				<div class="field">
					<input required type="number" id="longitude" name="longitude" value="" placeholder="longitude" class="login" style="width: 97%"/>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="email" id="mail" name="mail" value="" placeholder="An E-Mail senden" class="login" style="width: 97%"/>
				</div> <!-- /field -->
			
			<div class="login-actions">
									
				<button type="submit" name="btn-save" value="1" class="button btn btn-success btn-large">Los geht's</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
		 
  </div><!-- /container -->
</div><!-- /main-inner -->
</div><!-- /main -->
<?php include('inc.footer.php'); ?>
</body>
</html>
