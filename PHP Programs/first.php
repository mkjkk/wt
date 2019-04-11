<!Doctype html>
<html>
<body>
	<?php

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
fwrite($myfile,"welcome");
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
//echo fread($myfile,filesize("newfile.txt"));


fclose($myfile);
?>
	
</body>
</html>