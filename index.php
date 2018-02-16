<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Сборка ПК на заказ</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-width:400px)" href="media/mediastyle.css">
</head>
<body>
	<header>
		<div class="content">
			<div class="heading_and_menu">
				<div class="heading">
					<h1>
						Собери Пк.сом
					</h1>
				</div>
				<div class="nav">
					<nav>
						<ul>
							<li><a href="#main">Главная</a></li>
							<li><a href="#why">Почему мы?</a></li>
							<li><a href="#ourprojects">Несколько наших работ</a></li>
							<li><a href="#order">Заказать консультацию</a></li>
							<li><a href="#contact">Контакты</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<section>
		<div class="content withPc">
			<a id="main"></a>
			<div class="mainText">
				<div class="leftPC">
					<img src="images/firstPC.jpg" alt="">
				</div>
				<div class="middleINFO">
					<h2>Сотни довольных покупателей по всей России</h2>
				</div>
				<div class="rightPC">
					<img src="images/secondPC.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="content">
			<div class="ourpluses">
				<a id="why"></a>
				<h2>Почему мы?</h2>
				<div class="divrow">
					<div class="divitem">
						<div class="divicon icon1"></div>
						<div class="divdiscription">
							<p>Мы пытаемся удовлетворить Ваши желания
							Они для нас на первом месте</p>
						</div>
					</div>
					<div class="divitem">
						<div class="divicon icon2"></div>
						<div class="divdiscription">
							<p>Поддерживаем каждую Вашу идею</p>
						</div>
					</div>
				</div>
				<div class="divrow">
					<div class="divitem">
						<div class="divicon icon3"></div>
						<div class="divdiscription">
							<p>Гарантируем высокое качество работы</p>
						</div>
					</div>
					<div class="divitem">
						<div class="divicon icon4"></div>
						<div class="divdiscription">
							<p>Экономим Ваш бюджет</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="content">
			<div class="products">
				<a id="ourprojects"></a>
				<h2>Некоторые наши работы</h2>
				<div class="divproductrow">
					<div class="product pc1">
						<div class="pcimg">
							<img src="images/pc1.jpg" alt="">
						</div>
						<div class="pcinfo">
							<p>Процессор: Intel Core i5-7400 Kaby Lake</p>
							<p>Тактовая чистота: 3000 МГц</p>
							<p>Видеокарта: AMD RX 550 2 Гб</p>
							<p>Тип памяти: DDR4</p>
							<p>Объём ОЗУ: 8 Гб</p>
							<p>Объём накопителя: 1000 Гб</p>
							<p>Наличие SSD: Да(120 Гб)</p>
							<p><span>Цена: 40.000 тыс.р.</span></p>
						</div>
					</div>
					<div class="product pc2">
						<div class="pcimg">
							<img src="images/pc2.jpg" alt="">
						</div>
						<div class="pcinfo">
							<p>Процессор: AMD Ryzen 5 1400</p>
							<p>Тактовая чистота: 3400 МГц</p>
							<p>Видеокарта: NVIDIA GeForce GTX 1050 2Гб</p>
							<p>Тип памяти: DDR4</p>
							<p>Объём ОЗУ: 12 ГБ</p>
							<p>Объём накопителя: 1 Тб</p>
							<p>Наличие SSD: Да(128 Гб)</p>
							<p><span>Цена: 50.000 тыс.р.</span></p>
						</div>
					</div>
				</div>
				<div class="divproductrow">
					<div class="product pc3">
						<div class="pcimg">
							<img src="images/pc3.jpg" alt="">
						</div>
						<div class="pcinfo">
							<p>Процессор: Intel Core i5-7400</p>
							<p>Тактовая чистота: 3500 МГц</p>
							<p>Видеокарта: NVIDIA GeForce GTX 1050 Ti 4 ГБ</p>
							<p>Тип памяти: DDR4</p>
							<p>Объём ОЗУ: 8 Гб</p>
							<p>Объём накопителя: 1000 Гб</p>
							<p>Наличие SSD: Нет</p>
							<p><span>Цена: 60.000 тыс.р.</span></p>
						</div>
					</div>
					<div class="product pc1">
						<div class="pcimg">
							<img src="images/pc4.jpg" alt="">
						</div>
						<div class="pcinfo">
							<p>Процессор: Intel Core i5-7400</p>
							<p>Тактовая чистота: 3000 МГц</p>
							<p>Видеокарта: NVIDIA GeForce GTX 1050 Ti 4 ГБ</p>
							<p>Тип памяти: DDR4</p>
							<p>Объём ОЗУ: 8 Гб</p>
							<p>Объём накопителя: 1000 Гб</p>
							<p>Наличие SSD: Нет</p>
							<p><span>Цена: 45.000 тыс.р.</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="content">
			<div class="order">
				<a id="order"></a>
				<h2>Спросите нас о любом вопросе</h2>
				<form action="mail.php" method="POST">
					<input type="text" name="name" placeholder="Как к Вам обращаться?" required>
					<input type="email" name="email" placeholder="Укажите вашу почту:3" required>
					<input type="text" name="theme" placeholder="Укажите тему сообщения" required>
					<div class="divbuttons">
						<input type="reset" name="reset" value="Очистить форму">
						<input type="submit" name="submit" value="Отправить письмо">
					</div>
				</form>
			</div>
		</div>
	</section>
	<div class="section">
		<div class="content">
			<div class="contacts">
				<a id="contact"></a>
				<h2>Наши контакты</h2>
				<div class="block_of_contacts">
					<p>Телефон: 8-499-450-45-45</p>
					<p>Адрес офиса: Ул.Большая Семеновская д.36</p>
					<p>Электронная почта: fateseekers@mail.ru</p>
					<p>Мы на связи с 10:00 до 20:00</p>
					<p>Свяжитесь с нами и мы ответим на Ваши вопросы.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="divmediamenu">
		<a href="#main">
		<div class="divitem main">
			<img src="images/mediaicons/home.svg" alt="">
		</div>
		</a>
		<a href="#why">
		<div class="divitem why">
			<img src="images/mediaicons/why.svg" alt="">
		</div>
		</a>
		<a href="#ourprojects">
		<div class="divitem jobs">
			<img src="images/mediaicons/jobs.svg" alt="">
		</div>
		</a>
		<a href="#order">
		<div class="divitem ordericon">
			<img src="images/mediaicons/order.svg" alt="">
		</div>
		</a>
		<a href="#contact">
		<div class="divitem contact">
			<img src="images/mediaicons/contact.svg" alt="">
		</div>
		</a>
	</div>
	<a href="#main"><div id="button"></div></a>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
			  $("a[href*=#]").on("click", function(e){
				  var anchor = $(this);
				  $('html, body').stop().animate({
					  scrollTop: $(anchor.attr('href')).offset().top
				  }, 700);
				  e.preventDefault();
				  return false;
			  });
		  });
	</script>	
</body>
</html>
