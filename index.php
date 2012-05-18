<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title>Taldom Северная сторона подмосковья</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css" media="all" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" media="all" />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(function (){
			$('table tr:odd').addClass('odd');
			
			$('table tr').hover(function (){
				$(this).addClass('hover');
			}, function (){
				$(this).removeClass('hover');
			});
			
			// Колонки 1 высоты
			var def_height       = 0,
				def_height_block = 0;
			
			$('article.columns .column').each(function (){
				var height       = $('.ads-top-info', $(this)).height(),
					height_block = $(this).height();
				
				if (def_height < height)
				{
					def_height 		 = height;
					def_height_block = height_block;
				}
			});
			
			$('.ads-top-info').css('min-height', def_height);
			$('article.columns .column-in').css('min-height', def_height_block - 2);
            
            // Блоки объявлений при наведении
            $('.ads-scroll .column').hover(function (){
                $(this).addClass('hover');
            }, function (){
                $(this).removeClass('hover');
            });
            
            $('.ads-scroll .column.hover .column-in').attr('hideFocus', false).css("outline", "4px solid #acdfee");
		});
	</script>
	
	<!-- html5.js for IE less than 9 -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!--[if lte IE 8]>
    	<link rel="stylesheet" type="text/css" href="css/ie8.css" media="all" />
    <![endif]-->
</head>
<body>
	<div id="layout">
		
		<!-- Шапка -->
		<header>
			<hgroup>
				<a href="" class="logo"></a>
				
				<!-- Блок с авторизацией -->
				<div class="auth-block">
					<div class="soc">
						<div class="soc-in">
							<span>Войти при помощи</span>
							<ul>
								<li class="fb"><a href=""></a></li>
								<li class="vk"><a href=""></a></li>
								<li class="gplus"><a href=""></a></li>
							</ul>
						</div>
					</div>
					<div class="login">
						<ul>
							<li class="auth"><a href="">Авторизация</a></li>
							<li class="reg"><a href="">Регистрация</a></li>
						</ul>
					</div>
				</div>
			</hgroup>
			<!-- Навигация -->
			<nav class="meta-ot-b">
				<ul>
					<li class="home"><a href="/"></a></li>
					<li class="first-child"><a href="">Блоги</a></li>
					<li class="active"><a href="">Справочник</a></li>
					<li><a href="">Объявления</a></li>
					<li><a href="">Афиша</a></li>
					<li><a href="">Недвижимость</a></li>
					<li><a href="">Города</a></li>
					<li class="last-child"><a href="">Отдых</a></li>
				</ul>
			</nav>
		</header>
		
		<!-- Основной блок для главной -->
		<aside class="main-page clearfix">
			
			<!-- Разделительный блок -->
			<div class="container">
				<article class="slider clearfix">
					<div class="stand-block">
						<div class="logo"></div>
						<span class="num">150</span>
						<span class="num last">000</span>
						<span class="ads meta-ot-b">объявлений</span>
						<span class="border"></span>
						<span class="name meta-ot-b">Крупнейший портал подмосковья</span>
						<div class="scroller"></div>
						<nav>
							<ul>
								<?php for ($i = 1; $i <= 9; $i++) { ?>
								<li <?=($i == 1 ? 'class="first-child"' : '')?><?=($i == 9 ? 'class="last-child"' : '')?>><span><?=$i;?></span></li>
								<?php } ?>
							</ul>
						</nav>
					</div>
					<div class="slider-block">
						<div class="slider-block-container">
							<div class="slide">
								<img src="images/slider/1.jpg" alt="" />
								<div class="slide-info">
									<h2>Крупнейший портал подмосковья</h2>
									<h3>более 150 000 объявлений</h3>
								</div>
							</div>
						</div>
						
					</div>
				</article>
				<article class="banner">
					<img src="images/banner.png" alt="" />
				</article>
				<article class="blogs">
					
					<!-- Блок с погодой -->
					<div class="weather-block">
						<!-- Сегодня -->
						<div class="column today">
							<span class="morning active">
								<big>+3&deg</big>
								<small>Утром</small>
							</span>
							<span class="now">
								<big>+5&deg</big>
								<small>Сейчас</small>
							</span>
							<span class="night">
								<big>+1&deg</big>
								<small>Вечером</small>
							</span>
							<span class="weather-info">
								<span class="time">Сегодня 17.02</span>
								<span class="day">Четверг</span>
							</span>
						</div>
						
						<!-- Завтра -->
						<div class="column next-day">
							<big>+3&deg;</big>
							<span class="weather-info">
								<span class="time">17.02</span>
								<span class="day">Пятница</span>
							</span>
						</div>
						
						<!-- После завтра -->
						<div class="column next-two-day">
							<big>+4&deg;</big>
							<span class="weather-info">
								<span class="time">17.02</span>
								<span class="day">Суббота</span>
							</span>
						</div>
						
						<!-- 2 дня после завтра -->
						<div class="column last-day">
							<big>+3&deg;</big>
							<span class="weather-info">
								<span class="time">17.02</span>
								<span class="day">Воскресенье</span>
							</span>
						</div>
						
						<!-- Навигация по погоде -->
						<div class="weather-nav">
							<ul>
								<li class="prev"><a></a></li>
								<li class="next"><a></a></li>
							</ul>
						</div>
					</div>
					
					<!-- Блок с объявлениями -->
					<div class="ads-in-blogs">
						<h1><a href="">Объявления в блогах</a></h1>
						<div class="ads-columns clearfix">
							<div class="ads-column">
								<span class="date">19.02</span>
								<h2><a href="">Осеннее расписание движения
								автобусов по выходным дням</a></h2>
								<p>Сообщаем расписание движения автобусов по выходным дням, действующее с 8 октября 2011 года по 8 апреля 2012 года</p>
							</div>
							<div class="ads-column">
								<span class="date">23.02</span>
								<h2><a href="">Осеннее расписание движения
								автобусов по выходным дням</a></h2>
								<p>Сообщаем расписание движения автобусов по выходным дням, действующее с 8 октября 2011 года по 8 апреля 2012 года</p>
							</div>
							<div class="ads-column">
								<span class="date">25.02</span>
								<h2><a href="">Осеннее расписание движения
								автобусов по выходным дням</a></h2>
								<p>Сообщаем расписание движения автобусов по выходным дням, действующее с 8 октября 2011 года по 8 апреля 2012 года</p>
							</div>
						</div>
						<div class="buttons">
							<ul>
								<li><a href="">Создать блог <span class="plus-white"></span></a></li>
								<li class="gray"><a href="">Все блоги <span class="arrow-white"></span></a></li>
							</ul>
						</div>
					</div>
					
				</article>
				
				<!-- Колонки -->
				<article class="columns clearfix">
					<div class="column">
						<div class="column-in">
							<div class="ads-top-info">
								<h1><a href="">Объявления</a> <span class="date">19.02</span></h1>
								<h2><a href="">Новый газон за пол часа!</a></h2>
							</div>
							<div class="ads-block">
								<img src="images/ads/1.png" alt="" />
								<div class="ads-info">
									<p>Установка в течении 2 дней после<br />
									заявки на облогораживание земли<br />
									Вашего сада + поливка территории.<br />
									1 кв. м. / 1 500 р.</p>
									<a href="" class="btn">Дать объявление <span class="plus-black"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="column-in">
							<div class="ads-top-info">
								<h1><a href="">Новости афишы</a> <span class="date">19.02</span></h1>
								<h2><a href="">Стрит-рейсинг в Москве<br />по ул. Тверская</a></h2>
							</div>
							<div class="ads-block">
								<img src="images/ads/1.png" alt="" />
								<div class="ads-info">
									<p>Установка в течении 2 дней после<br />
									заявки на облогораживание земли<br />
									Вашего сада + поливка территории.<br />
									1 кв. м. / 1 500 р.</p>
									<a href="" class="btn">Дать объявление <span class="plus-black"></span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="column last">
						<div class="column-in">
							<h1><a href="">Важно знать!</a></h1>
							<ul>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодниеи постновогодние события</a>
								</li>
								<li>
									<span class="date">13.04</span>
									<a href="">Новогодниеи постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодниеи постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодниеи постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодниеи постновогодние события</a>
								</li>
							</ul>
						</div>
					</div>
				</article>
				<article class="shedule">
					<h1><a href="">Расписания</a></h1>
					<ul>
						<li class="train"><a>Элекрички <span class="black"></span></a></li>
						<li class="active bus"><a>Автобус <span class="white"></span></a></li>
					</ul>
					<div class="column first-child">
						<div class="column-in">
							<select name="" id="">
								<option value="">Cтанция отправления</option>
							</select>
						</div>
					</div>
					<div class="column last-child">
						<div class="column-in">
							<select name="" id="">
								<option value="">Cтанция прибытия</option>
							</select>
						</div>
					</div>
					<div class="clear"></div>
					
					<table>
						<tr>
							<th width="50">Рейс</th>
							<th>Маршрут</th>
							<th width="100">Отправление</th>
							<th width="100">Прибытие</th>
							<th width="60">В пути</th>
						</tr>
						<?php for($i = 1; $i <= 5; $i++) { ?>
						<tr>
							<td class="reys"><small>№</small> <big><?=$i;?></big></td>
							<td><a href="">Юбилейный — Хлебокомбинат</a></td>
							<td>13:00</td>
							<td>16:00</td>
							<td>3:00</td>
						</tr>
						<?php } ?>
					</table>
				</article>
			</div>
			
			<!-- Блок для объявлений -->
			<article class="ads">
				<div class="ads-main">
					<h1><a href="">Объявления</a></h1>
					<div class="ads-slide">
						<a class="left-arr"></a>
						<div class="ads-slide-in">
							<div class="ads-scroll">
								
								<!-- Колонки для объявлений -->
								<div class="column">
									<div class="column-in">
										<p>Требуется продавец<br />
										в детский магазин</p>
										<span class="cost">15 000 р. / месяц</span>
										<img src="images/ads/small/1.png" alt="" />
										<div class="ads-info">
											<p>Окрас: черный и тигровый.<br/>
											Обращаться по телефонам:<br />
											8(916) 176-90-46; 8(916)<br />
											742-78-30; 8(917)584-14-68</p>
											<a class="category" href="">Животные</a>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="column-in">
										<p>Требуется продавец<br />
										в детский магазин</p>
										<span class="cost">15 000 р. / месяц</span>
										<img src="images/ads/small/1.png" alt="" />
										<div class="ads-info">
											<p>Окрас: черный и тигровый.<br/>
											Обращаться по телефонам:<br />
											8(916) 176-90-46; 8(916)<br />
											742-78-30; 8(917)584-14-68</p>
											<a class="category" href="">Животные</a>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="column-in">
										<p>Требуется продавец<br />
										в детский магазин</p>
										<span class="cost">15 000 р. / месяц</span>
										<img src="images/ads/small/1.png" alt="" />
										<div class="ads-info">
											<p>Окрас: черный и тигровый.<br/>
											Обращаться по телефонам:<br />
											8(916) 176-90-46; 8(916)<br />
											742-78-30; 8(917)584-14-68</p>
											<a class="category" href="">Животные</a>
										</div>
									</div>
								</div>
								<div class="column">
									<div class="column-in">
										<p>Требуется продавец<br />
										в детский магазин</p>
										<span class="cost">15 000 р. / месяц</span>
										<img src="images/ads/small/1.png" alt="" />
										<div class="ads-info">
											<p>Окрас: черный и тигровый.<br/>
											Обращаться по телефонам:<br />
											8(916) 176-90-46; 8(916)<br />
											742-78-30; 8(917)584-14-68</p>
											<a class="category" href="">Животные</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						<a class="right-arr"></a>
					</div>
					<div class="buttons">
						<ul>
							<li><a href="">Дать объявление <span class="plus-white"></span></a></li>
							<li class="gray"><a href="">Все объявления <span class="arrow-white"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="ads-bot"></div>
			</article>
			
			<!-- Рекламный блок -->
			<article class="reclame-block"></article>
			
			<!-- Разделительный блок -->
			<div class="container">
				<article class="columns clearfix">
					
					<!-- Отдых -->
					<div class="column">
						<div class="column-in">
							<h1><a href="">Отдых</a></h1>
							<ul>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
							</ul>
							<a href="" class="btn-all">Все записи <span class="arrow-white"></span></a>
						</div>
					</div>
					
					<!-- Новости проекта -->
					<div class="column">
						<div class="column-in">
							<h1><a href="">Новости проекта</a></h1>
							<ul>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
								<li>
									<span class="date">06.07</span>
									<a href="">Новогодние<br />
									и постновогодние события</a>
								</li>
							</ul>
							<a href="" class="btn-all">Все новости проекта <span class="arrow-white"></span></a>
						</div>
					</div>
					
					<div class="column last">
						<div class="column-in">
							<div class="ads-top-info">
								<h1><a href="">Объявления</a> <span class="date">19.02</span></h1>
								<h2><a href="">Новый газон за пол часа!</a></h2>
							</div>
							<div class="ads-block">
								<img src="images/ads/big/1.png" alt="" />
								<div class="ads-info nobg">
									<p>Город в Московской области, административный центр Талдомского района Московской области. Население — 12,3 тыс. чел. (2010).</p>
									<a href="" class="more">Подробнее <span class="plus-white"></span></a>
								</div>
							</div>
						</div>
					</div>
					
				</article>
                
                <!-- Форум -->
				<article class="bottom-block clearfix">
                    <div class="forum-column">
                        <h1><a href="">Форум</a></h1>
                        <div class="post-forum">
                            <span class="date">19.02</span>
                            <p><a class="author" href="">Андрей</a> <span>написал в теме:</span></p>
                            <h2><a href="">«Дневник игрока команды по американскому футболу»</a></h2>
                            <p>Сегодня ночью проект "Народный портал Талдома (taldom.org)" переехал на новый сервер.</p>
                        </div>
                        <div class="post-forum">
                            <span class="date">19.02</span>
                            <p><a class="author" href="">Андрей</a> <span>написал в теме:</span></p>
                            <h2><a href="">«Дневник игрока команды по американскому футболу»</a></h2>
                            <p>Сегодня ночью проект "Народный портал Талдома (taldom.org)" переехал на новый сервер.</p>
                        </div>
                        <div class="post-forum">
                            <span class="date">19.02</span>
                            <p><a class="author" href="">Андрей</a> <span>написал в теме:</span></p>
                            <h2><a href="">«Дневник игрока команды по американскому футболу»</a></h2>
                            <p>Сегодня ночью проект "Народный портал Талдома (taldom.org)" переехал на новый сервер.</p>
                        </div>
                        
                        <a href="" class="btn-all">Все сообщения форума <span class="arrow-white"></span></a>
                    </div>
                    <div class="last-photos">
                        <h1><a href="">Последние фото</a> <span class="date">13.10</span></h1>
                        <h2><a href="">Храм Василия Блаженого<br />
                        Строительство 1555—1561 годы</a></h2>
                        
                        <div class="last-photos-slider">
                            <img src="images/last-photos/1.png" alt="" />
                            
                            <div class="last-photos-nav">
                                <a class="left-arr">
                                    <span></span>
                                </a>
                                <div class="last-photos-scroll">
                                    <ul>
                                        <li><img src="images/last-photos/1.png" alt="" /></li>
                                        <li><img src="images/last-photos/1.png" alt="" /></li>
                                        <li><img src="images/last-photos/1.png" alt="" /></li>
                                        <li><img src="images/last-photos/1.png" alt="" /></li>
                                        <li><img src="images/last-photos/1.png" alt="" /></li>
                                    </ul>
                                </div>
                                <a class="right-arr">
                                    <span></span>
                                </a>
                            </div>
                            
                            <a class="btn-all" href="">Все фото <span class="arrow-white"></span></a>
                        </div>
                    </div>
                    
                </article>
			</div>
		</aside>
		
		<!-- Подвал -->
		<footer>
            <div class="footer-in">
                <menu class="clearfix">
                    <ul>
                        <li>
                            <a href="">Мобильный портал</a>
                            <ul class="sub-menu">
                                <li><a href="">ТВ-реклама</a></li>
                                <li><a href="">Печтная реклама</a></li>
                                <li><a href="">Наружняя реклама</a></li>
                                <li><a href="">Баннеры</a></li>
                                <li><a href="">Календарь</a></li>
                                <li><a href="">Упаковка</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">О проекте</a>
                            <ul class="sub-menu">
                                <li><a href="">Логотипы</a></li>
                                <li><a href="">Слоганы</a></li>
                                <li><a href="">Нейминг</a></li>
                                <li><a href="">Анимация</a></li>
                                <li><a href="">Брендинг</a></li>
                                <li><a href="">Ребрендинг</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Сотрудничество и реклама</a>
                            <ul class="sub-menu">
                                <li><a href="">Социальная реклама</a></li>
                                <li><a href="">Запрещеная реклама</a></li>
                                <li><a href="">Скандальная реклама</a></li>
                                <li><a href="">Интерактивная реклама</a></li>
                                <li><a href="">Celebrity marketing</a></li>
                                <li><a href="">Контекстная реклама</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Техподдержка</a>
                            <ul class="sub-menu">
                                <li><a href="">Креативные обзоры</a></li>
                                <li><a href="">Статьи</a></li>
                                <li><a href="">Школа рекламиста</a></li>
                                <li><a href="">Любимые ролики</a></li>
                                <li><a href="">Рейтинг Taldom</a></li>
                                <li><a href="">Художники и арт-проекты</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">RSS</a>
                            <ul class="sub-menu">
                                <li><a href="">Логотипы</a></li>
                                <li><a href="">Слоганы</a></li>
                                <li><a href="">Нейминг</a></li>
                                <li><a href="">Анимация</a></li>
                                <li><a href="">Брендинг</a></li>
                                <li><a href="">Ребрендинг</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Segoe UI TTF</a>
                        </li>
                    </ul>
                </menu>
                
                <div class="footer-text">
                    <p><big>2008-2011. Проект "Народный портал Талдом.Org"</big>
                    <small>При копировании материалов обязательна активная ссылка на www.taldom.org</small></p>
                </div>
                <div class="footer-img">
                    <img src="images/footer-img.png" alt="" />
                </div>
                <div class="clear"></div>
                
                <p class="note">Профессионал-строй - Все виды ремонтных и отделочных работ за разумные деньги. | Каталог прямых ссылок InWind.ru | сайт о портовом городке Ванино, новости, фотоальбом, форум ванинцев, чат. | http://bezdoom.narod2.ru | Каталог сайтов | Добавьте Ваш сайт в Глобальный каталог сайтов! | Каталог сайтов | Создание сайтов - Веб дизайн, разработка сайтов, раскрутка сайтов в интернете, их продвижение, разработка фирменного стиля, реклама в интернете.</p>
                
            </div>
        </footer>
	</div>
</body>
</html>