<?php
$a=0;
$b=1;
echo $a. " ".$b;
$count=2;
$fib=0;
while($count<=10)
{
	
		$fib=$a+$b;
		echo " ".$fib;
		$a=$b;
		$b=$fib;

		$count=$count+1;
	
	

}


?>
