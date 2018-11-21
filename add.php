<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
</head>

<body>
	<a href="index.php">index.php</a><br>
	<a href="add.php">add.php</a><br>
	<a href="phrase_add.php">phrase_add.php</a><br>
	<a href="test.txt" target="_blank"#>text.txt</a><br>
	<br>
	
	<form action="index.php" method="get">
		<strong>Name</strong><br>
		<input type="text" name="name"><br>
		<br>
		<strong>Begrüßung</strong><br>
		<select name="gruss">
			<option value="Guten Morgen">Guten Morgen</option>
			<option value="Mahlzeit">Mahlzeit</option>
			<option value="Guten Abend">Guten Abend</option>
			<option value="Gute Nacht">Gute Nacht</option>
		</select><br>
		<br>
		<input type="submit" value="Abschicken">
	</form>
</body>
</html>