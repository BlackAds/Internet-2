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
	
	<?php
	echo $_GET['name'].' '.$_GET['gruss'];
		
	echo $_GET['unfug-0'].' '.$_GET['unfug-1'].' '.$_GET['unfug-2'];
	
	$text = urldecode($_REQUEST['unfug-0']).' '.urldecode($_REQUEST['unfug-1']).' '.urldecode($_REQUEST['unfug-2'])."\n";
	
	
		
	file_put_contents('test.txt', $text, FILE_APPEND);
	
	$myText = file_get_contents('test.txt', FILE_IGNORE_NEW_LINES);
	
	echo '<br>
	<br> <strong>Ausgabe Textdokument</strong><br>';
	
	foreach ($myText as $textausgabe)
	{
		echo $textausgabe;
	}
		
	?>
</body>
</html>
