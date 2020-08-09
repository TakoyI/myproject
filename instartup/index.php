<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>In Startup We Trust</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<div class="wrapper">
	<div class="header">
		<div class="logo">
			<img class="logotype" src="images/	ISWT.png" alt="">
			<img class="slogan" src="images/Slogan.png" alt="">
			<?php 
			ini_set("display_errors", 0);
				if($_COOKIE['user'] == ''):
			?>	
			<div class="regist">
				<div class="reg">
					<a href="subpages/registration.php">Вход/Регистрация</a>
				</div>
			</div>
			<?php else: ?>
				<div class="ifauth" style="float: right; padding: 5px 10px 10px 10px; background: #45ABC3; border-bottom-left-radius: 10px;">
					<p style="font-size: 1.4em;">Привет <?=$_COOKIE['user'] ?>!     <a href="subpages/exit.php" style="text-decoration: none;">ВЫХОД</a></p>
				</div>
			<?php endif; ?>
		</div>
		<div class="menubar">
			<ul class="mainmenu">
				<li>
					<a href="index.php" unselectable="on">Главная</a>
				</li>
				<li>
					<a href="subpages/calc.php">Калькулятор</a>
				</li>
				<li>
					<a href="">О проекте</a>
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
		<div class="benefits">
			<div id="b1">
				<img src="images/Комьюнити.png"/>
				<h2>Огромное комьюнити пользователей</h2>
				<p>Вы можете наблюдать как много пользователей получают доход в реальном времени! Круглосуточная поддержка пользователей.</p>
			</div>
			<div id="b2">
				<img src="images/Защита.png"/>
				<h2>Первоклассная защита</h2>
				<p>Данные пользователей и их кошельки защищены несколькими уровнями шифрования. Вы можете быть уверены, что ваши личные данные и денежные средства не уйдут в чужие руки.</p>
			</div>
			<div id="b3">
				<img src="images/рынок.png"/>
				<h2>Ваш вклад влияет на рост компаний!</h2>
				<p>Вы инвестируете на рынок современных IT, Нано и Digital компаний в рельном времени! Ваши инвестиции помогают развиваться стартапу на рынке!</p>
			</div>
			<div id="b4">
				<img src="images/доход.png"/>
				<h2>Высокая доходность</h2>
				<p>Высокая доходность обеспечена высокой скоростью роста современных предприятий. Мы инвестируем ваши деньги, получаем прибыль, берём свой процент, отдаём ваш вклад + вашу прибыль вам. Всё просто и прозрачно!</p>
			</div>
		</div>
		<div class="content">
			<div class="title">
				<h1>Порядок проведения инвестиции:</h1>
			</div><!DOCTYPE html>
			<div class="order">
				<div class="stage">
					<img src="images/stage1.png" alt="">
					<p>Наша команда опытных инвестиционных аналитиков проводит анализ рынка IPO, ежедневно на бирже появляются новые перспективные стартапы. Исходя из анализа рынка, каждый день из 10 перспективных стартапов мы отбираем 5 наиболее привлекательных.</p>
					<img src="images/stage2.png" alt="">
					<p>Затем мы собираем n- ную сумму со всех, кто решил сделать вклад в нашем проекте, после чего сразу формируем инвестиционный портфель из акций, купленных на деньги вкладчиков.</p>
					<img src="images/stage3.png" alt="">
					<p>Со времени открыия и до времени её закрытия на бирже происходит рост или падение(в зависимости от покупаемости продукта компании). Перед закрытием мы продаём эти акции.</p>
					<img src="images/alles.png" alt="">
					<p>После продажи мы удерживаем малый процент с суммы продажи, остальные деньги идут к вам, Больший вклад=больший доход от вклада. В случае с более длительным вкладом мы реинвестируем ваши деньги на следующий день, и так далее...</p>
				</div>
				<div class="history">
					<p>Последние выплаты:</p>
					<div class="user1">
						<h4>gogogo</h4>
					</div>
					<div class="user2">
						<h4>gogogo</h4>
					</div>
					<div class="user3">
						<h4>gogogo</h4>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="footer">
		<a href="index.php">Главная</a>
		<a href="subpages/calc.php">Калькулятор</a>
		<a href="#">Поддержка</a>
	</div>
</div>
	
</body>
</html>