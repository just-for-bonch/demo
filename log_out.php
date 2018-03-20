<form method="POST">
	<input type="submit" value="Выход" name="go">
</form>
<?php
	if (isset($_POST['go']))
	{
	$_SESSION = array();
	session_destroy();
	header('Location: index.php');
	$mysqli->close();
	}
?>