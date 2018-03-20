<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="style.css" >
<title>Вход</title>
</head>

<body>

<form id="login" action="auth.php" method="POST">
    <h1>Вход</h1>
    <fieldset id="inputs">
        <input id="username" placeholder="Логин" autofocus="" required="" type="text" name="login">   
        <input id="password" placeholder="Пароль" required="" type="password" name="pass">
    </fieldset>
    <fieldset id="actions">
        <input id="submit" value="Войти" type="submit">
    <a href="reg_us.php">Зарегистрироваться как КЛИЕНТ!</a><br>
    <a href="reg_ar.php">Зарегистрироваться как АРХИТЕКТОР!</a>
    </fieldset>
</form>


<script type="text/javascript" src="/templates/pcv/js/pcvector.js"></script>

</body>
</html>