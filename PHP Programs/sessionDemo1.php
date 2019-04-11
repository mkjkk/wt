<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			$_SESSION["favcolor"]="Sky_Blue";
			$_SESSION["favsport"]="Volley_Ball";
		?>
		<a href="sessionDemo2.php"><input type="button" value="Submit"></a>
	</body>
</html>
