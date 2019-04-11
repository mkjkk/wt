<?php
	setcookie("name","abc",time()+3600);
	setcookie("age",44,time()+3600);
	setcookie("location",'India',time()+3600);
?>
<html>
	<body>
		<?php
			print("Cookie Set <br>");
			print("Name : ".$_COOKIE['name']."</br>");
			print("Age : ".$_COOKIE['age']."</br>");
			print("Location : ".$_COOKIE['location']."</br>");
			
		?>
	</body>
</html>