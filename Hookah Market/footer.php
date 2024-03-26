<div class="container">
	<footer>
		<div class="footer_row">
			<a href="/" class="about_item_title">
				<img src="/img/logo.svg" alt="Логотип"> HookahMarket
			</a>
			<div class="footer_menus">
				<div class="footer_menu_block">
					<div class="footer_menu_title">Нашим клиентам</div>
					<ul class="footer_menu">
						<li><a href="/gde-kupit/">Где купить</a></li>
						<li><a href="/oplata-i-dostavka/">Оплата</a></li>
						<li><a href="#">Доставка</a></li>
						<li><a href="/lk/orders/">Мои заказы</a></li>
						<li><a href="/aksii/">Акции</a></li>
						<li><a href="/optovikam/">Оптовикам</a></li>
					</ul>
				</div>

				<div class="footer_menu_block">
					<div class="footer_menu_title">О компании</div>
					<ul class="footer_menu">
						<li><a href="/about/">О нас</a></li>
						<li><a href="/contacts/">Контакты</a></li>
					</ul>
				</div>
			</div>

		</div>

		<div class="footer_bottom">
			<p class="footer_text">Информация, содержащаяся на настоящем сайте, не является рекламой, так как представляет собой каталог для ограниченного круга лиц - совершеннолетних потребителей табачной продукции для предоставления им достоверной информации об основных потребительских свойствах и качественных характеристик товаров, ассортименте товаров, правилах их использования (п.п.1, 2 ст.10 Закона «О защите прав Потребителя»).
				<br>Copyright 2023 © HookahMarket</p>
			<p class="footer_text">ООО «ХУКАМАРКЕТ БАЙ» УНП 193583817 <br>Эл.почта: minskhm@mail.ru <br>Юр.адрес: 220073, РБ, г.Минск, ул.Ольшевского, д.24, пом. 7а, каб. 7а-1-97В торговом реестре с 27.10.2021 г., <br>рег. номер 521828
				<br>Администрация Фрунзенского р-на г.Минска <br>Контакт уполномоченного лица по обращениям граждан
				администрации района: +375(17)323-41-58</p>
			<div class="footer_soc_links">
				<a href="#">Telegram</a>
				<a href="#">Youtube</a>
				<a href="#">Instagram</a>
				<a href="#">Вконтакте</a>
			</div>
		</div>

		<div class="footer_pay_block">
			<p class="footer_pay_text">Мы принимаем все популярные виды оплат:</p>
			<img src="/img/pay_icons.svg" class="pay_icons">
		</div>

	</footer>
</div>

	<div class="auth_modal">
		<svg class="auth_modal_close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1.00021 1.00006L15 15M14.9998 1L1 14.9999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="lk_modal_header">
			<h3 class="lk_modal_title">Личный кабинет</h3>
			<div class="lk_modal_desc">Введите ваши данные или <a href="#" class="register_modal_btn">зарегистрируйтесь</a></div>
		</div>
		<form action="#" class="login_form">
			<div class="form-row">
				<label for="auth_user_email">Ваша почта</label>
				<input type="email" id="auth_user_email" name="auth_user_email" placeholder="Введите вашу почту">
			</div>
			<div class="form-row">
				<label for="auth_user_password">Ваш пароль</label>
				<input type="password" id="auth_user_password" name="auth_user_password" placeholder="Введите ваш пароль">
			</div>
			<div class="form-row">
				<input type="submit" value="Войти" class="btn w-100"/>
			</div>
			<div class="form_bottom">
				<label class="custom-checkbox">
					<input type="checkbox" name="remember" id="remember">
					<span>Запомнить меня</span>
				</label>
				<a href="#" class="forget_pass">Забыли пароль</a>
			</div>
		</form>
	</div>

	<div class="register_modal">
		<div class="register_modal_head">
			<div class="register_steps">Шаг <span class="register_step_start">1</span> из <span class="register_step_end">2</span></div>
			<svg class="register_modal_close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M1.00021 1.00006L15 15M14.9998 1L1 14.9999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
			</svg>
		</div>
		
		<form class="register_form" class="register_steps_container">
			<div class="register_steps_container">
				<div class="register_step" step="1">
					<div class="lk_modal_header">
						<h3 class="lk_modal_title">Регистрация</h3>
						<div class="lk_modal_desc">Введите ваши контактные данные</div>
					</div>
			
						<div class="form-row">
							<label for="register_user_name">Имя и фамилия</label>
							<input type="text" id="register_user_name" name="register_user_name" placeholder="Введите ваше имя и фамилию">
						</div>
						<div class="form-row">
							<label for="register_user_phone">Телефон</label>
							<input type="tel" id="register_user_phone" name="register_user_phone" placeholder="+375 29 365 93 25">
						</div>
						<div class="form-row">
							<label for="register_user_email">Почта</label>
							<input type="email" id="register_user_email" name="register_user_email" placeholder="hukamarker@mail.ru">
						</div>
						<div class="form-row">
							<label>Зарегистрироваться как:</label>
							<div class="user_types_row">
								<div class="user_type active" data-type="#user_type_fiz">Физ. Лицо</div>
								<div class="user_type" data-type="#user_type_ur">Юр. Лицо</div>
							</div>
							<input type="checkbox" name="user_type_fiz" id="user_type_fiz" class="user_type_checkbox" checked>
							<input type="checkbox" name="user_type_ur" id="user_type_ur" class="user_type_checkbox">
						</div>
						<div class="form-row">
							<label class="custom-checkbox">
								<input type="checkbox" name="register_agree" id="register_agree">
								<span>Я согласен на обработку персональных данных</span>
							</label>
						</div>
						<div class="form-row">
							<a href="#" class="btn register_next_btn">Далее</a>
						</div>
						<div class="register_agree_text">Нажимая на кнопку “Далее” вы соглашаетесь <a href="#">с Политикой обработки персональных данных</a></div>
					
				</div>

				<div class="register_step" step="2">
					<div class="lk_modal_header">
						<h3 class="lk_modal_title">Регистрация</h3>
						<div class="lk_modal_desc">Введите данные компании</div>
					</div>
						<div class="form-row">
							<label for="register_name_company">Название компании</label>
							<input type="text" id="register_name_company" name="register_name_company" placeholder="Введите название компании">
						</div>
						<div class="form-row">
							<label for="register_number_unp">Номер УНП</label>
							<input type="text" id="register_number_unp" name="register_number_unp" placeholder="Введите УНП компании">
						</div>
						<div class="form-row">
							<a href="#" class="btn register_next_btn">Далее</a>
						</div>
				</div>

			<div class="register_step" step="3">
				<div class="lk_modal_header">
					<h3 class="lk_modal_title">Регистрация</h3>
					<div class="lk_modal_desc">Придумайте пароль</div>
				</div>
				
					<div class="form-row">
						<label for="register_user_password">Ваш пароль</label>
						<input type="password" id="register_user_password" name="register_user_password" placeholder="Введите пароль">
					</div>
					<div class="form-row">
						<label for="register_user_password_repeat">Ваш пароль еще раз</label>
						<input type="password" id="register_user_password_repeat" name="register_user_password_repeat" placeholder="Повторите пароль">
					</div>
					<div class="form-row">
						<input type="submit" class="btn register_submit_btn w-100" value="Зарегистрироваться">
					</div>
			</div>
		</div>
		</form>
	</div>

	<div class="forget_modal">
		<svg class="forget_modal_close" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1.00021 1.00006L15 15M14.9998 1L1 14.9999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
		</svg>
		<div class="lk_modal_header">
			<h3 class="lk_modal_title">Сброс пароля</h3>
			<div class="lk_modal_desc">Введите ваши данные</div>
		</div>
		<form action="#" class="remember_form">
			<div class="form-row">
				<label for="forget_user_email">Ваша почта</label>
				<input type="email" id="forget_user_email" name="forget_user_email" placeholder="Введите вашу почту">
			</div>
			<div class="form-row">
				<input type="submit" value="Сбросить" class="btn w-100"/>
			</div>
		</form>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/fancybox.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</body>

</html>