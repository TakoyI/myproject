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
			<?php 
			ini_set("display_errors", 0);
				if($_COOKIE['user'] == ''):
			?>	
			<div class="regist">
				<div class="reg">
					<a href="registration.php">Вход/Регистрация</a>
				</div>
			</div>
			<?php else: ?>
				<div class="ifauth" style="float: right; padding: 5px 10px 10px 10px; background: #45ABC3; border-bottom-left-radius: 10px;">
					<p style="font-size: 1.4em;">Привет <?=$_COOKIE['user'] ?>!     <a href="exit.php" style="text-decoration: none;">ВЫХОД</a></p>
				</div>
			<?php endif; ?>
		</div>
		<div class="menubar">
			<ul class="mainmenu">
				<li>
					<a href="../index.php" unselectable="on">Главная</a>
				</li>
				<li>
					<a href="#">Калькулятор</a>
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
	<div class="main">
	 	<div class="content" style="width: 1800px; ">
			<div class="calcform">
				<form action="calculated.php" method="POST">
					<p>Минимальная сумма инвестиции - 5 000р. Максимальная сумма инвестиции - 200 000р.</p><br>
					<p>1.Укажите сумму инвестиции.</p>
					<input type="number" min="5000" max="200000" autocomplete="none" placeholder="Введите сумму" name="summ" id="summ" required><br>
					<p>2.Выберите период инвестиции.</p>
					<select name="period" id="period">
						<option value="1">1 День(4%)</option>
						<option value="7">7 Дней(7%)</option>
						<option value="30">30 Дней(10%)</option>
					</select><br>
					<h2>Важно:</h2>
					<p>
						Мы занимаемсяя акциями на Нью-Йоркской фондовой бирже. Биржа работает с понедельника по пятницую. Торговая сессия открывается в 9:30 и заканчивается в 16:00 по EST(Восточное Стандартное Время). Период инвестиции указан в календарных днях, в дни, когда биржа не работает, мы, соответсвенно, не увеличиваем капитал(Проценты не начисляются).
					</p><br>
					<button type="submit">Расчитать</button>
				</form>
				<?php 
				ini_set("display_errors", 0);
				if ($_SESSION['result']) {
					echo '<p class="result">Результат: '.$_SESSION['result']. 'р. </p>';
					unset($_SESSION['result']);

					if ($_COOKIE['user'] == '') {
						echo '<div class="investreg">
						<a href="registration.php">Вход/Регистрация</a>
						</div>';
					} else {
						echo '<div class="invest">
						<a href="#">Инвестировать</a>
						</div>';
					}
				}
				?>
			</div>
		</div>
		<div class="footer">
			<a href="../index.php">Главная</a>
			<a href="#">Калькулятор</a>
			<a href="#">Поддержка</a>
		</div>
	</div>
</div>




</body>
</html>