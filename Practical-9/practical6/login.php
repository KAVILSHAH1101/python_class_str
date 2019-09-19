<?php
session_start();
?>
<html>
<body>
	<form action="authenticate.php" method="post">
		Username:<input type="text" name="uname"><br>
		Password:<input type="password" name="pass"><br>
		<input type="submit" name="submit">
	</form>
	</html>
</body>
