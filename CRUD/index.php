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

<div class="account-container">
	
<div class="content clearfix">
		
		<h1>Phrase erstellen</h1>		
			
			<div class="login-fields">
				
				<p>Gib dein Name ein:</p>
				
				<form method="post" action="phrasen.php">
				
				<div class="field">
				<input type="text" name="name" maxlength="100"  class="login username-field">
				</div> <!-- /field -->
					
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
				<input type="text" name="name" maxlength="100"  class="login username-field">
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
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
