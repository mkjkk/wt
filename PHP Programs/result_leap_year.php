<?php
$txt_value=$_POST["txt_value"];

if($txt_value%4!=0)
{
echo $txt_value." is not a leap year";

}
else
{
	echo $txt_value." is leap year";
}


?>
