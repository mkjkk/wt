<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<body>
		<?php
			session_unset();
			session_destroy();
		?>
		<h1 align="center">......Session Out.....</h1>
	</body>
</html>