<?php  
session_start();
ini_set("display_errors", 0);
$loginin = filter_var(trim($_POST['loginin']), FILTER_SANITIZE_STRING);
$pass3 = filter_var(trim($_POST['pass3']), FILTER_SANITIZE_STRING);


$pass3 = md5($pass3."ewet4k32t4pwe232");

$mysql = new mysqli('localhost', 'root', 'root', 'instartup_db');

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$loginin' AND `pass` = '$pass3'");
$user = $result->fetch_assoc();
if (count($user) == 0) {
	$_SESSION['messagelog'] = 'Неверный Логин или Пароль!';
	header('Location: registration.php');
	exit();
}
setcookie('user', $user['username'], time() + 3600, "/");

$_SESSION['messagelogg'] = 'Авторизация прошла успешно!';
$mysql->close();
header('Location: registration.php');
?>