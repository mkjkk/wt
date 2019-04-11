<?php

$a=$_GET['id'];
echo $a;
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to mysql");
mysql_select_db( 'mysql' );

  $query="select * from ".$a;
  //echo $query;
  $result=mysql_query($query);
  if(!$result)
  {
  	echo "could not".mysql_error();
  }
  echo "<table border=1>";
  while ($row = mysql_fetch_array($result)) { 
  	echo "<tr>";
  for($i=0;$i<mysql_num_fields($result);$i++)  
  {    
  echo "<td>"; 
    echo $row[$i]." "; 
    echo "</td>"; 
}
echo "</tr>";
}
 echo "</table>"
   // $v=mysql_num_fields($result);    
    //echo $v;   


?>