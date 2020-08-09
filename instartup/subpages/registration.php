<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>In Startup We Trust</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="logo">
			<img class="logotype" src="../images/ISWT.png" alt="">
			<img class="slogan" src="../images/Slogan.png" alt="">
		</div>
		<div class="menubar">
			<ul class="mainmenu">
				<li>
					<a href="../index.php">Главная</a>
				</li>
				<li>
					<a href="calc.php">Калькулятор</a>
				</li>
				<li>
					<a href="#">О проекте</a>
					<ul class="submenu">
						<li>
							<a href="#">Как заработать</a>
						</li>
						<li>
							<a href="#">Гарантии</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Мой аккаунт</a>
					<ul class="submenu">
						<li>
							<a href="#">Мой профиль</a>
						</li>
						<li>
							<a href="#">Пополнить счет</a>
						</li>
						<li>
							<a href="#">Вывод средств</a>
						</li>
					</ul>
				</li>
			</ul>

		</div>
	</div>
	<div class="contentform">
		<div class="regform">
			<form action="regist.php" method="POST">
				<h2>Регистрация:</h2>
				<input type="text" name="login" id="login" placeholder="Введите Логин" autocomplete="off" required>
				<p>Е-mail используется при входе в аккаунт.</p>
				<br>
				<input type="text" name="username" id="username" placeholder="Введите Имя пользователя" autocomplete="off" required>
				<p>Имя пользователя может содержать только буквы латинского алфавита и цифры(Длина должна быть не менее 3 символов, и не более 20). </p>
				<br>
				<input type="password" name="pass1" id="pass1" placeholder="Введите Пароль" autocomplete="off" required>
				<p>Пароль может содержать буквы кириллицы и латинского алфавита, а так же цифры(Длина не менее 8 символов).</p>
				<br>
				<input type="password" name="pass2" id="pass2" placeholder="Введите Пароль ещё раз" autocomplete="off" required>
				<br>
				<button type="submit" name="reg" id="reg">Зарегистрироваться</button>
			</form>
			<?php 
			ini_set("display_errors", 0);
			if ($_SESSION['messageok']) {
				echo '<p class="messageok"> '.$_SESSION['messageok']. ' </p>';
				unset($_SESSION['messageok']);
			} elseif ($_SESSION['messageno']) {
				echo '<p class="messageno"> '.$_SESSION['messageno']. ' </p>';
				unset($_SESSION['messageno']);
			}
			
			?>
			
		</div>
		<div class="logform">
			<form action="login.php" method="POST">
				<h2>Вход:</h2>
				<input type="text" name="loginin" id="loginin" placeholder="Введите Логин" autocomplete="off" required>
				<br>
				<input type="password" name="pass3" id="pass3" placeholder="Введите Пароль" autocomplete="off" required>
				<br>
				<button type="submit">Войти в аккаунт</button>
			</form>
			<?php 
			ini_set("display_errors", 0);
			if ($_SESSION['messagelog']) {
				echo '<p class="messagelog"> '.$_SESSION['messagelog']. ' </p>';
				unset($_SESSION['messagelog']);
			} elseif ($_SESSION['messagelogg']) {
				echo '<p class="messagelogg"> '.$_SESSION['messagelogg']. ' </p>';
				unset($_SESSION['messagelogg']);
			}
			?>
		</div>
	</div>

	<div class="footer">
		<a href="../index.php">Главная</a>
		<a href="calc.php">Калькулятор</a>
		<a href="#">Поддержка</a>
	</div>
</div>
</body>
</html>