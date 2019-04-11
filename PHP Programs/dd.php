<?php
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
//$sql = 'CREATE DATABASE TUTORIALS1';
/*$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create database: ' . mysql_error());
}
echo "Database TUTORIALS created successfully\n";*/
/*mysql_select_db( 'TUTORIALS1' );
$sql = "CREATE TABLE tutorials_tbl( ".
       "tutorial_id INT NOT NULL AUTO_INCREMENT, ".
       "tutorial_title VARCHAR(100) NOT NULL, ".
       "tutorial_author VARCHAR(40) NOT NULL, ".
       "submission_date DATE, ".
       "PRIMARY KEY ( tutorial_id )); ";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";*/
$result = mysql_query("SHOW TABLES FROM mysql ");    
if(!$result)    
{
	echo "could not find".mysql_error();
}
while ($row = mysql_fetch_array($result)) {        
    echo $row[0]."<a href=details.php?id=$row[0]>View</a>"."<br>";        
}

mysql_close($conn);
?>