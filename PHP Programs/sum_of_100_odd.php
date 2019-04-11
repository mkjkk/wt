<?php
$no=1;
$count=1;
$sum=0;
while($count<=100)
{
	if($no%2!=0)
	{

		$sum=$sum+$no;
		$count=$count+1;

	}
	$no=$no+1;

}
echo "sum of first 100 odd no is ". $sum;

?>
