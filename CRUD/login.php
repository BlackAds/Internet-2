<?php session_start(); ?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Login</title>
<?php  include('inc.header.php'); ?>
</head>
<body>
<?php include('inc.nav.php'); include('inc.sql.php'); ?>
<div class="main" style="min-height: 100%; z-index: 1">
<div class="main-inner">
  <div class="container">

<?php
	$error = "";
	  
	//Einloggen
	if (isset($_POST['btn-login'])){

		if($_POST['passwort'] == 'Gruel'){
			$_SESSION['user261290'] = 'true';
			echo '<meta http-equiv="refresh" content="0; URL=admin.php">';
		}
		else {
		    $error = 'Nein, so heißt er nicht!';
		}
}
?>	  
	  
<div class="account-container">
	
<div class="content clearfix">
		
		<h1>Login</h1>		
			
			<div class="login-fields">
				
				<form method="post" action="login.php">
				
				<div class="field">
				<input type="text" name="passwort" maxlength="100"  class="login username-field" placeholder="Wie ist Wolfgang´s Nachname?">
				</div> <!-- /field -->
					<span style="color: red;"><?php echo $error; ?></span>
			</div> <!-- /login-fields -->
					
			<div class="login-actions">
									
				<button type="submit" name="btn-login" value="1" class="button btn btn-success btn-large">Einloggen</button>
				
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
