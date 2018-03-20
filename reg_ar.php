<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <title>Поставщик</title>
    <link rel="stylesheet" href="style.css" >

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="jquery.placeholder.js"></script>
	
</head>

<body>
  	<form id="signup" action="save_user.php" method="POST" enctype="multipart/form-data">
		<h1>Регистрация поставщика</h1>
		<input placeholder="Название компании" required="" type="text" name="company">
		<input placeholder="Ваше имя" required="required" type="text" name="name">
		<input placeholder="Почта в формате email@email.com" required="required" type="email" name="email">
		<input placeholder="Ваш пароль" required="required" type="password" name="pass">
		<p style="font-size: 14px;">Загрузите Ваш Логотип:<input type="file" name="logo"></p>
		<p style="font-size: 14px;">Загрузите Ваш Аватар:<input type="file" name="avatarka"></p>
			<select name="sfera">
				<?php 
					session_start();
					include("bd.php");
						$result=$mysqli->query("SELECT * FROM sferi");
							while ($row = $result->fetch_array(MYSQLI_ASSOC))
								echo "<option value='".$row['id_sferi']."'>".$row['name_sferi']."</option>";
				?>
			</select>

		<button type="submit">Зарегистрироваться!</button>	
	</form>
<script type="text/javascript" src="http://pcvector.net/templates/pcv/js/pcvector.js"></script>
</body>
</html>



