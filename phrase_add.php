<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
	<?php include('inc.php'); ?>
</head>

<body>
<?php nav(); ?>
	
	<form action="index.php" method="get">
		<strong>Name</strong><br>
		<input type="text" name="name"><br>
		<br>
		<strong>I Say YES! to...</strong><br>
		<select name="unfug-0">
			<option selected>unfug_0</option>
			<option >Spaßige</option>
			<option >Kaputte</option>
			<option >Große</option>
			<option >Seltsame</option>
		</select>
		<select name="unfug-1">
			<option selected>unfug-1</option>
			<option >Affen</option>
			<option >Alien</option>
			<option >Räuber</option>
			<option >Rentner</option>
		</select>
		<select name="unfug-2">
			<option selected>unfug-2</option>
			<option >Party</option>
			<option >Schnitzel</option>
			<option >Klopapier</option>
			<option >Supermarkt</option>
		</select><br>
		<br>
		<input type="submit" value="Abschicken">
	</form>
</body>
</html>