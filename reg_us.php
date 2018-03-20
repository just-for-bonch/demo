<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Клиент</title>
    <link rel="stylesheet" href="style.css" >

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="jquery.placeholder.js"></script>
	<script type="text/javascript">

	function showMe (box) 
	{
		var vis = (box.checked) ? "block" : "none";
		document.getElementById('div1').style.display = vis;
	}

</script>
	
</head>

<body>
  	<form id="signup" enctype="multipart/form-data" action="save_user.php" method="POST">
		<h1>Регистрация клиента</h1>
		<input placeholder="Ваше имя" required="required" type="text" name="name">
		<p style="font-size: 18px;">Представитель компании<input style="width: 10%;" type="checkbox" name="multi_note" value="1" onclick="showMe(this)"></p>
			<div id="div1" style="display:none;">
				<input placeholder="Название Вашей компании" type="text" name="company">
				<p style="font-size: 14px;">Загрузите Ваш Логотип:<input type="file" name="logo"></p>
			</div>
		<input placeholder="Ваша почта в формате email@email.com" required="required" type="email" name="email">
		<input placeholder="Ваш пароль" required="required" type="password" name="pass">
		<p style="font-size: 14px;">Загрузите Ваш Аватар:<input type="file" name="avatarka"></p>
			<button type="submit">Зарегистрироваться!</button>	
	</form>
<script type="text/javascript" src="http://pcvector.net/templates/pcv/js/pcvector.js"></script>
</body>
</html>