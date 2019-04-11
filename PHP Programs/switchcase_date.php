<?php

$d=date('d');
echo "Today's date is ".$d."<br>";
// using Switch Case
switch($d)
{
	case '3':
		echo "It is dentist appointment"."<br>";

		break;
	case '10':
		echo "Go to conference"."<br>";
		break;
		default:
		echo "No events are scheduled"."<br>";
}

//using If Condition
if($d==3)
{
	echo "It is dentist appointment";

}
elseif($d==10)
{
	echo "Go to conference";
}
else
{
	echo "No events are scheduled";
}