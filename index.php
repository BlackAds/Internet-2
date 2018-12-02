<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Unbenanntes Dokument</title>
	<?php include('inc.php'); ?>
</head>

<body>
<?php
	nav();
	
	if(empty($_GET['name'])) {
		die('Du hast dein Namen vergessen!');
	}
	else {
		echo 'Guten Tag '.$_GET['name'].'<p>';
		file_put_contents('test.txt',$_GET['name'], FILE_APPEND);
	}
		
	echo $_GET['name'].' '.$_GET['unfug-0'].' '.$_GET['unfug-1'].' '.$_GET['unfug-2'];
	
	$text = urldecode($_REQUEST['unfug-0']).' '.urldecode($_REQUEST['unfug-1']).' '.urldecode($_REQUEST['unfug-2'])."\n";
	
	
		
	file_put_contents('test.txt', $text, FILE_APPEND);
	
	$myText = file_get_contents('test.txt', FILE_APPEND);
	
	echo '<br>
	<br> <strong>Ausgabe Textdokument</strong><br>';
	
	foreach ($myText as $textausgabe)
	{
		echo $textausgabe;
	}
	
		
	?>
</body>
</html>
