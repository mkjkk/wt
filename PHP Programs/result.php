<?php
$txt_value=$_POST["txt_value"];

$a=0;
$b=1;
echo $a. " ".$b;
$count=2;
$fib=0;
while($count<=$txt_value)
{
	
		$fib=$a+$b;
		echo " ".$fib;
		$a=$b;
		$b=$fib;

		$count=$count+1;
	
	

}


?>
