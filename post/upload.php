<?php
if(isset($_POST['submit'])){
	$text = $_POST['text'];
	$filename = "text.txt";
	$file = fopen($filename, "w");
	fwrite($file, $text);
	fclose($file);
	echo "Text uploaded successfully.";
}
?>