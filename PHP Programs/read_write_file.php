<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Welcome\n";
fwrite($myfile, $txt);
$txt = "To PHP World\n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile, filesize("newfile.txt"));
fclose($myfile);
?>
