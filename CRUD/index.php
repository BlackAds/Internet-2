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
	
	$db_query = "INSERT INTO
                       phrases
                            (name,
							text,
							insertdate
                            )
                    VALUES
                            ('".$name."',
							'".$text."',
                             NOW()
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
		echo '<meta http-equiv="refresh" content="0; URL=phrasen.php?success">';
      }    
}
?>	  
	  
<div class="account-container">
	
<div class="content clearfix">
		
		<h1>Phrase erstellen</h1>		
			
			<div class="login-fields">
				
				<form method="post" action="index.php">
				
				<div class="field">
				<input type="text" name="name" maxlength="100"  class="login username-field" placeholder="Gib dein Name ein">
				</div> <!-- /field -->
					
			</div> <!-- /login-fields -->
					
				<div class="field">
				<select name="phrase1" style="width: 100%">
                  <option value="wohldosierte">wohldosierte</option>
                  <option value="virtuose">virtuose</option>
                  <option value="fehlerfreie und größtartige">fehlerfreie und größtartige</option>
                  <option value="krasse">krasse</option>
                  <option value="paranormale">paranormale</option>
                  <option value="exponentielle">exponentielle</option>
                </select>
				</div> <!-- /field -->
					
				<div class="field">
				<select name="phrase2" style="width: 100%">
                  <option value="Fortschritts">Fortschritts</option>
                  <option value="Schnitzel">Schnitzel</option>
                  <option value="HdM">HdM</option>
                  <option value="Schnittfeld">Schnittfeld</option>
                  <option value="Kinderfaschings-">Kinderfaschings</option>
                </select>
				</div> <!-- /field -->
					
				<div class="field">
				<select name="phrase3" style="width: 100%">
                  <option value="Verdopplung">Verdopplung</option>
                  <option value="Enthaarung">Enthaarung</option>
                  <option value="Vorhersage">Vorhersage</option>
                  <option value="System">System</option>
                  <option value="Korruption">Korruption</option>
                  <option value="mit Pommes">mit Pommes</option>
                </select>
				</div> <!-- /field -->
				
				<div class="field">
					<input type="text" id="mail" name="mail" value="" placeholder="An E-Mail senden" class="login" style="width: 97%"/>
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
