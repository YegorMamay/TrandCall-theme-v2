<?php
/**
 * Template Name: Home Page
 **/
?>

<?php get_header(); ?>

    <div id="header" class="header">
		<div class="container">
			<div class="offer">
				<h1 class="offer__title">
					АУТСОРСИНГОВЫЙ CALL-ЦЕНТР ДЛЯ ИНТЕРНЕТ-МАГАЗИНОВ
				</h1>
				<p class="offer__text dash">
					Увеличим Вашу Прибыль <span>в Два Раза!</span>  
				</p>
			</div>
		<div class="timer d-flex">
		    <div class="clock">
                <p class="clock-text">Первые <span>25 заказов</span> подтвердим <span>бесплатно</span></p>
		        <?php echo do_shortcode('[soon name="MyFlipper" due="at 23:59"][/soon]'); ?>
		    </div>
		    <div class="hero-form">
                <p class="hero-form-text">Оставьте заявку прямо сейчас и забудьте про головную боль!</p>
		        <?php
                    if (function_exists("add_formcraft_form")) {
                    add_formcraft_form("[fc id='5'][/fc]");
                    }
                ?>
		    </div>
		</div>
		</div>
	</div>
	<section id="about" class="about">
		<div class="container">
			<div class="section-title d-flex">
				<h2 class="title__main">
					О компании
				</h2>
				<p class="title__caption dash">
					TrendCall — call-центр который окупает себя сам <br>  за счет допродаж. Вся чистая прибыль с продаж ваша.
				</p>
			</div>
			<div class="about-wrapper d-flex">
				<div class="item">
					<span class="item__icon">
						5+
					</span>
					<span class="item__icon-caption">
						лет на рынке
					</span>
					<h3 class="item__icon-title">
						активных продаж
					</h3>
				</div>
				<div class="item">
					<span class="item__icon">
						1 000 000+
					</span>
					<span class="item__icon-caption">
						принятых заказов
					</span>
					<h3 class="item__icon-title">
						и допродаж
					</h3>
				</div>
				<div class="item">
					<span class="item__icon">
						7
					</span>
					<span class="item__icon-caption">
						дней в неделю работаем*
					</span>
					<h3 class="item__icon-title">
						без выходных
					</h3>
				</div>
				<div class="item">
					<span class="item__icon">
						90%+
					</span>
					<span class="item__icon-caption">
						подтвержденных заказов*
					</span>
					<h3 class="item__icon-title">
						на автопилоте
					</h3>
				</div>
				<div class="item">
					<span class="item__icon">
						75%+
					</span>
					<span class="item__icon-caption">
						делаем допродажи*
					</span>
					<h3 class="item__icon-title">
						и больше
					</h3>
				</div>
				<div class="item">
					<span class="item-text">
						Это еще не все...
					</span>
				</div>
			</div>
			<?php
                    if (function_exists("add_formcraft_form")) {
                    add_formcraft_form("[fc id='5'][/fc]");
                    }
                ?>
		</div>
	</section>
	<section id="benefit" class="benefit">
		<div class="container">
			<div class="section-title d-flex">
				<h2 class="title__main">
					Ваши выгоды
				</h2>
				<p class="title__caption dash">
					Почему Вам стоит работать с нами?
				</p>
			</div>
			<div class="row">
				<div class="benefit-wrapper">
					<div class="item">
						<span class="item__icon">
							<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/fast-call.svg" alt="Fast Call">
						</span>
						<h3 class="item__icon-title">
							БЫСТРЫЙ ПРОЗВОН
						</h3>
						<p class="item__icon-text">
							Звоним в течении 5 минут для максимальной подтверждаемости заказов
						</p>
					</div>
					<div class="item">
						<span class="item__icon">
							<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/approve.svg" alt="Approve">
						</span>
						<h3 class="item__icon-title">
							ВЫСОКИЙ АПРУВ И ДОПРОДАЖИ
						</h3>
						<p class="item__icon-text">
							Результат регулярных обучений менеджеров и контроля качества звонков
						</p>
					</div>
					<div class="item">
						<span class="item__icon">
							<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/script.svg" alt="Scripts">
						</span>
						<h3 class="item__icon-title">
							УНИКАЛЬНЫЕ СКРИПТЫ ПРОДАЖ
						</h3>
						<p class="item__icon-text">
							Разрабатываем и внедряем скрипты под ваши товары индивидуально
						</p>
					</div>
					<div class="item">
						<span class="item__icon">
							<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/message.svg" alt="Message">
						</span>
						<h3 class="item__icon-title">
							СОПРОВОЖДЕНИЕ ЗАКАЗА
						</h3>
						<p class="item__icon-text">
							Дожимаем заказ до выкупа звонками и SMS
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="benefit-wrapper benefit-wrapper2">
					<div class="head">
						<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/head.png" alt="Head">
						<div class="head__visit-card">
							<div class="inner">
								<span class="head__visit-card__name">
									Екатерина Иванова
								</span>
								<span class="head__visit-card__spec">
									Руководитель «TrendCall»
								</span>
							</div>
						</div>
					</div>
					<div class="items">
						<div class="item">
							<span class="item__icon">
								<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/call-record.svg" alt="Call Record">
							</span>
							<h3 class="item__icon-title">
								ЗАПИСЬ ЗВОНКОВ
							</h3>
							<p class="item__icon-text">
								Предоставляем записи звонков для прозрачности
							</p>
						</div>
						<div class="item">
							<span class="item__icon">
								<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/tech-specialist.svg" alt="Tech Specialist">
							</span>
							<h3 class="item__icon-title">
								ТЕХНИЧЕСКИЙ СПЕЦИАЛИСТ <span>ONLINE</span>
							</h3>
							<p class="item__icon-text">
								Подключит и настроит Вам CRM-систему
							</p>
						</div>
						<div class="item">
							<span class="item__icon">
								<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/manager.svg" alt="Manager">
							</span>
							<h3 class="item__icon-title">
								ПЕРСОНАЛЬНЫЙ МЕНЕДЖЕР <span>ONLINE</span>
							</h3>
							<p class="item__icon-text">
								Поддержка на всех этапах работы
							</p>
						</div>
						<div class="item">
							<span class="item__icon">
								<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/best-prices.svg" alt="Best Prices">
							</span>
							<h3 class="item__icon-title">
								ЛУЧШИЕ ЦЕНЫ И КАЧЕСТВО ПРОДАЖ
							</h3>
							<p class="item__icon-text">
								От 15 гривен за принятый заказ
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php
if (function_exists("add_formcraft_form")) {
add_formcraft_form("[fc id='5'][/fc]");
}
?>
		</div>
	</section>
	<section id="works" class="works">
		<div class="container">
			<div class="section-title d-flex">
				<h2 class="title__main">
					Как мы работаем?
				</h2>
				<p class="title__caption dash">
					Очень просто
				</p>
			</div>
			<div class="work-wrapper">
				<div class="item">
					<span class="number">1</span>
					<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/request.svg" alt="Request">
					<h3 class="item__icon-title">
						Вы оставляете заявку
					</h3>
				</div>
				<div class="item">
					<span class="number">2</span>
					<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/crm.svg" alt="CRM">
					<h3 class="item__icon-title">
						Мы подключаем и настраиваем CRM-систему
					</h3>
				</div>
				<div class="item">
					<span class="number">3</span>
					<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/operator.svg" alt="Request">
					<h3 class="item__icon-title">
						Мы работаем с заказами <br> 7 дней в неделю
					</h3>
				</div>
				<div class="item">
					<span class="number">4</span>
					<img src="/wp-content/themes/TrandCall-theme-v2/assets/img/Icons/wallet.svg" alt="Wallet">
					<h3 class="item__icon-title">
						Вы оплачиваете только за принятые заказы и допродажи
					</h3>
				</div>
			</div>
			<?php
                    if (function_exists("add_formcraft_form")) {
                    add_formcraft_form("[fc id='5'][/fc]");
                    }
                ?>
		</div>
	</section>
	<section id="testi" class="testi">
		<div class="container">
			<div class="section-title d-flex">
				<h2 class="title__main">
					Отзывы клиентов
				</h2>
				<p class="title__caption dash">
					Главное - результат!
				</p>
			</div>
			<div class="testi-wrap">
				<div class="item">
					<div class="client d-flex">
						<span class="client-ava" style="background: url('/wp-content/themes/TrandCall-theme-v2/assets/img/feedback1.png') no-repeat center center / cover;"></span>
						<div class="client-info">
							<span class="client-name">
								Валерий Иванов	
							</span>
							<p class="client-spec">
								Владелец товарного бизнеса
							</p>
						</div>
						<div class="right-block">
							<div class="inner">
								200 заказов
								<br>
								в день
							</div>
						</div>
					</div>
					<div class="testi-text">
						Всем привет. Хочу написать отзыв о колл центре. Работаем уже с ребятами более двух месяцев и впечатления только положительные. Делаем около 100 лидов в день - обработка качественная и своевременная, апрув 85-90%. Что особенно впечатлило, так это количество апселов - примерно 60%. Именно из за этих факторов я стал сотрудничать именно с данным колл центром выбирая между несколькими вариантами. Всем советую!
					</div>
				</div>
				<div class="item">
					<div class="client d-flex">
						<span class="client-ava" style="background: url('/wp-content/themes/TrandCall-theme-v2/assets/img/feedback2.png') no-repeat center center / cover;"></span>
						<div class="client-info">
							<span class="client-name">
								Дмитрий Костюченко
							</span>
							<p class="client-spec">
								Владелец интернет-магазина
							</p>
						</div>
						<div class="right-block">
							<div class="inner">
								200 заказов
								<br>
								в день
							</div>
						</div>
					</div>
					<div class="testi-text">
						Отзыв о моей работе с колл-центром TrendCALL. Качественный колл-центр, заявки обрабатываются быстро. Менеджеры работают четко по часам 7 дней в неделю минута в минуту с 9:00 до 21:00, менеджеры вежливые, знают свое дело, работают по скриптами, процент допродаж более 60%. Недозвон до клиентов прозванивают несколько дней. За счет апсела и кроссела колл-центр полностью себя окупает плюс дает вам больше заработать. Поддержка в телеграме отвечает тоже моментально и решает любые вопросы. Рекомендую!
					</div>
				</div>
				<div class="item">
					<div class="client d-flex">
						<span class="client-ava" style="background: url('/wp-content/themes/TrandCall-theme-v2/assets/img/feedback3.png') no-repeat center center / cover;"></span>
						<div class="client-info">
							<span class="client-name">
								Евгений Герасимчук
							</span>
							<p class="client-spec">
								Владелец товарного бизнеса
							</p>
						</div>
						<div class="right-block">
							<div class="inner">
								4000 заказов
								<br>
								в месяц
							</div>
						</div>
					</div>
					<div class="testi-text">
						Всем привет! Предупреждаю, отзыв длинный,но полезный и только на личном опыте! Занимаюсь "товаркой" уже около года и решил попробовать коллцентр на аутсорсе так как уже начал грузнуть в рутине, а это, я считаю, смертный грех бизнеса! Да и лиды должны прозваниваться быстро по горячим следам, не говоря уже про большое колличество попыток дозвона! Каждая такая мелочь потом выливаться в убытки!После подключения уже прошло 2 месяца, я могу смело теперь делать выводы основываясь на цифрах, хладнокровно и трезво) Время для маркетинга и
						<a href="#" class="show-more-link">Показать полностью</a>
					</div>
				</div>
			</div>
			<div class="row">
				<button class="testi-btn">
					Оставить отзыв
				</button>
			</div>
		</div>
	</section>  


<?php get_template_part('loops/content', 'home'); ?>
<?php get_footer(); ?>
