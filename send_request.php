<?php 
session_start();
include("bd.php");
	if (isset($_POST['req']))
		{
			$sf=$_POST['sfer'];
			$text=$_POST['rtext'];
			$id_us=$_POST['id_us'];
			$name=$_POST['rname'];

			$mysqli->query("INSERT INTO users_query(id_user_query, id_service_query, name_query, desc_query) VALUES ($id_us, $sf, '$name', '$text')");
			echo $mysqli->error;
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Отправка заявки</title>
</head>
<body>
	<?php echo '<script>alert("Сообщение отправлено!")</script>';?>
	<script type="text/javascript">
setTimeout(function(){
      window.location.href = 'lk_client.php';
    }, 100);
</script>
</body>
</html>