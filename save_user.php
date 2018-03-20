<?php 
session_start();
include("bd.php");

    if (isset($_POST['email'])) { $login = $_POST['email']; if ($login == '') { unset($login); exit("ВВЕДИТЕ ЛОГИН!");} }
    if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password); exit("ВВЕДИТЕ ПАРОЛЬ!");} }
	if (isset($_POST['name'])) { $name = $_POST['name']; if ($name== '') { unset($name); exit("ВВЕДИТЕ ИМЯ!");} }
	if (isset($_POST['sfera'])) { $sfera = $_POST['sfera']; if ($sfera == '') { unset($sfera); $role=1;} }
	if (isset($_POST['company'])) $company=$_POST['company']; else unset($company);

 	$login = stripslashes($login);
    $login = htmlspecialchars($login);
	$password = stripslashes($password);
    $password = htmlspecialchars($password);
    $name = stripslashes($name);
    $name = htmlspecialchars($name);
	//удаляем лишние пробелы
    $login = trim($login);
    $password = trim($password);
    $name= trim($name);

$num=0;//чисто юзер
$result=$mysqli->query("SELECT * FROM users WHERE login=$login");
if ($result)
	$num=$result->num_rows;

if ($num>=1)
	exit("ЛОГИН ЗАНЯТ!");
else if (isset($sfera))
	{
		unset($result);
		$hash=md5($login.$password.$login);
		$mysqli->query("INSERT INTO users(name_user, role_id, service_id, login, hash) VALUES ('$name', 2, $sfera, '$login', '$hash')");
	}
	else 
	{
		unset($result);
		$hash=md5($login.$password.$login);
		$mysqli->query("INSERT INTO users(name_user, role_id, login, hash) VALUES ('$name', 1, '$login', '$hash')");
	}

$row=$mysqli->insert_id;
$fname = $_FILES['avatarka']['name'];
$ext = substr($fname, strpos($fname, '.'), strlen($fname) - 1);

if(empty($_FILES['avatarka']['size'])) $mysqli->query("UPDATE users SET img_src='avatars/no_avatar.jpg' WHERE id_user=$row");
	else
		{
if($_FILES['avatarka']['size'] > (2 * 1024 * 1024)) die('Размер файла не должен превышать 2Мб');
	$imageinfo = getimagesize($_FILES['avatarka']['tmp_name']);
	$arr = array('image/jpeg','image/gif','image/png');
		if(!in_array($imageinfo['mime'],$arr)) echo ('Картинка должна быть формата JPG, GIF или PNG');
 			else 
 			{
				$upload_dir = 'avatars/'; //имя папки с картинками
				$name = $upload_dir.date('Ymd').$row.$ext;
				$mov = move_uploaded_file($_FILES['avatarka']['tmp_name'],$name);
  					if($mov) 
  						{
							require('bd.php'); // подключение к БД
							$name = stripslashes(strip_tags(trim($name)));
							if (!$mysqli->query("UPDATE users SET img_src='$name' WHERE id_user=$row"))
							echo $mysqli->error; // здесь запрос на добавление
							
            			}
  					else echo 'Произошла ошибка при загрузке аватарки. Пожалуйста, попробуйте снова';
        	}
        }

unset($name);unset($arr);unset($imageinfo);unset($upload_dir);unset($mov);unset($fname);unset($ext);
//ЗАГРУЗКА КОМПАНИИ        

$fname = $_FILES['logo']['name'];
$ext = substr($fname, strpos($fname, '.'), strlen($fname) - 1);


if (isset($_FILES['logo']['size'])) 
		$q=$mysqli->query("INSERT INTO company(name_comp, id_posr) VALUES ('$company', $row)");
	else 
	{
		exit("Запрос на ввод неправильный!");
	}

$rrow=$mysqli->insert_id;

if (empty($_FILES['logo']['size'])) $mysqli->query("UPDATE company SET logo_src='logos/no_logo.jpg' WHERE id_comp=$rrow");
	else
		{
			if($_FILES['logo']['size'] > (2 * 1024 * 1024)) die('Размер файла не должен превышать 2Мб');
			$imageinfo = getimagesize($_FILES['logo']['tmp_name']);
			$arr = array('image/jpeg','image/gif','image/png');
				if(!in_array($imageinfo['mime'],$arr)) echo ('Картинка должна быть формата JPG, GIF или PNG');
 					else 
 					{
						$upload_dir = 'logos/'; //имя папки с картинками
						$name = $upload_dir.date('Ymd').$rrow.$ext;
						$mov = move_uploaded_file($_FILES['logo']['tmp_name'],$name);
  					if($mov) 
  						{
							require('bd.php'); // подключение к БД
							$name = stripslashes(strip_tags(trim($name)));
							if (!$mysqli->query("UPDATE company SET logo_src='$name' WHERE id_comp=$rrow"))
							echo $mysqli->error; // здесь запрос на добавление
							
            			}
  					else echo 'Произошла ошибка при загрузке аватарки. Пожалуйста, попробуйте снова';
        	}
		}

$mysqli->close();

print "<script language='Javascript'>function reload() {location = \"index.php\"}; setTimeout('reload()', 10000);</script> 
<p>Сообщение отправлено! Спасибо!</p>";
?>