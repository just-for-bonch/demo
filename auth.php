<?php 
session_start();
include("bd.php");

if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} }
if (isset($_POST['pass'])) { $password=$_POST['pass']; if ($password =='') { unset($password);} }

if (empty($login) or empty($password))
    {
        $_SESSION['error']='Заполните все поля!';
        header('Location: error.php');
        exit;
    }

$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);

$login = trim($login);
$password = trim($password);

$result = $mysqli->query("SELECT * FROM users WHERE login='$login'");
	if ($result)
		{
			$password=md5($login.$password.$login);
				$row=$result->fetch_array();
				if ($password==$row['hash'])
				{
					$_SESSION['id_p']=$row['id_user'];
					$_SESSION['role']=$row['role_id'];
						header("location: profile.php");
				}
				else 
					{
						$_SESSION['error']='Введите правильный пароль!';
						header("location: error.php");
						$mysqli->close();
						exit;
					}    
		}    
else
{
	$_SESSION['error']='Введите правильный логин и пароль!';
	header("location: error.php");
	$mysqli->close();
	exit;
}                                                                                          
?>