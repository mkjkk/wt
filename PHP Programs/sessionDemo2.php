<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			echo "Color is ".$_SESSION["favcolor"]."</br>";
			echo "Sport is ".$_SESSION["favsport"]."</br>";
		?>
		<a href="sessionDemo3.php"><input type="button" value="Logout"></a>
	</body>
</html>