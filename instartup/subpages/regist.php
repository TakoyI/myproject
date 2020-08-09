<?php 
session_start();
ini_set("display_errors", 0);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$pass1 = filter_var(trim($_POST['pass1']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);
// Connection MySQL
$mysql = new mysqli('localhost', 'root', 'root', 'instartup_db');
$result = $mysql->query("SELECT 1 FROM `users` WHERE `login` = '$login'");
$user = $result->fetch_assoc();

$resultq = $mysql->query("SELECT 1 FROM `users` WHERE `username` = '$username'");
$userq = $resultq->fetch_assoc();

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
$pass1 = filter_var(trim($_POST['pass1']), FILTER_SANITIZE_STRING);
$pass2 = filter_var(trim($_POST['pass2']), FILTER_SANITIZE_STRING);
	// Connection MySQL
$mysql = new mysqli('localhost', 'root', 'root', 'instartup_db');
$result = $mysql->query("SELECT 1 FROM `users` WHERE `login` = '$login'");
$user = $result->fetch_assoc();

$resultq = $mysql->query("SELECT 1 FROM `users` WHERE `username` = '$username'");
$userq = $resultq->fetch_assoc();
	
if (!preg_match("/\b[\w. -]+@[\w. -]+\.[A-Za-z]{2,6}\b/",$login)) {
	$_SESSION['messageno'] = 'Недопустимый E-mail';
	header('Location: registration.php');
	exit();
} else if (!empty($user)){
	$_SESSION['messageno'] = 'Данный E-mail уже зарегистрирован!';
	header('Location: registration.php');
	exit();
} else if (!preg_match("#^[aA-zZ0-9\-_]+$#",$username) || mb_strlen($username) < 3 || mb_strlen($username) > 20) {
	$_SESSION['messageno'] = 'Недопустимое Имя пользователя!';
	header('Location: registration.php');
	exit();
} else if (!empty($userq)) {
	$_SESSION['messageno'] = 'Имя пользователя занято!';
	header('Location: registration.php');
	exit();
} else if (preg_match(" /[^0-9]/", $pass1) || mb_strlen($pass1) < 8) {
	$_SESSION['messageno'] = 'Недопустимый Пароль!';
	header('Location: registration.php');
	exit();
} else if ($pass1 != $pass2) {
	$_SESSION['messageno'] = 'Пароли не совпадают!';
	header('Location: registration.php');
	exit();
}


$pass1 = md5($pass1."ewet4k32t4pwe232");

$mysql->query("INSERT INTO `users` (`login`, `pass`, `username`) VALUES('$login', '$pass1', '$username')");
$mysql->close();
$_SESSION['messageok'] = 'Регистрация прошла успешно!';
header('Location: registration.php');

?>