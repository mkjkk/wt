<?php

$count=1;
echo "<table border=1><tr><td>Number</td><td>Cube</td></tr>";
while($count<=10)
{
	echo "<tr><td>".$count."</td><td>".($count*$count*$count)."</td></tr>";
	$count=$count+1;

}
echo "</table>";

?>
