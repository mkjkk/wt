<?php
$txt_enroll=$_POST["txt_enroll"];
$txt_name=$_POST["txt_name"];
$txt_sem=$_POST["txt_sem"];
$txt_per=$_POST["txt_per"];

$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$conn = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to mysql");
  $query="CREATE DATABASE student_info";
  mysql_query($query);
  mysql_select_db("student_info");
  $query="CREATE TABLE student1(stu_enrollment int(12) PRIMARY KEY,stu_name varchar(30),stu_semester int(2),stu_per float(10))";
  mysql_query($query);
mysql_select_db("student_info",$conn);
$query="INSERT INTO student1 VALUES('".$txt_enroll."','".$txt_name."','".$txt_sem."','".$txt_per."')";

mysql_query($query);
$query="select * from student1";
$result=mysql_query($query);
echo "<br>";
echo "<table border=1 width=50% align=center>";
echo "<tr><td>Enrollment No</td><td>Name</td><td>semester</td><td>Percentage</td></tr>";
while($row=mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>".$row['stu_enrollment']."</td>";
	echo "<td>".$row['stu_name']."</td>";
	echo "<td>".$row['stu_semester']."</td>";
	echo "<td>".$row['stu_per']."</td>";
	echo "</tr>";

}
echo "</table>";
mysql_close($conn);


?>
