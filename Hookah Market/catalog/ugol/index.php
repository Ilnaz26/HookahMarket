<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<section class="catalog_top" style="background-image: url(/img/ugol_top.jpg);">
	<div class="container">
		<div class="breadcrumbs">
			<a href="/">Главная</a>
			<img src="/img/breadcrumb.svg">
			<a href="/catalog/">Каталог</a>
			<img src="/img/breadcrumb.svg">
			<span>Уголь</span> 
		</div>
		<h2 class="catalog_title">Уголь</h2>
	</div>
</section>

<section>
	<div class="container">
		<div class="catalog_head">
			<div class="catalog_head_btns">
				<a data-fancybox href="#pobbor_po_price_modal" class="ch_btn active">Подборка по ценам</a>
				<a data-fancybox href="#pobbor_po_brand_modal" class="ch_btn">Подборка по брендам</a>
				<a data-fancybox href="#pobbor_po_style_modal" class="ch_btn">Подборка по стилю</a>
			</div>
			<div class="catalog_filter_row">
				<a href="#" class="cf_btn"><img src="/img/filter_def_icon.svg" alt="Иконка фильтра"> Фильтры</a>
				<a href="#" class="cf_btn"><img src="/img/popular_icon.svg" alt="Иконка популярное"> Популярное</a>
			</div>
		</div>

		<div class="catalog_list">
			<div class="filter">
				<a href="#" class="filter_close">
					<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1.00027 1.00008L19 19M18.9997 1L1 18.9999" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</a>
				<div class="filter_title">Фильтры</div>
				<form action="#" class="filter_form">
					<div class="filter_items">
						<div class="filter_item">
							<div class="fi_title">Бренды <img src="/img/fi_icon.svg" class="fi_icon" alt="Свернуть"></div>
							<div class="fi_content">
								<div class="checkbox_container">
									<label class="custom-checkbox">
										<input type="checkbox" name="brand[]" value="Alfa Hookah">
										<span>Alfa Hookah</span>
									</label>
									<label class="custom-checkbox">
										<input type="checkbox" name="brand[]" value="Antero">
										<span>Antero</span>
									</label>
									<label class="custom-checkbox">
										<input type="checkbox" name="brand[]" value="Aura">
										<span>Aura</span>
									</label>
									<label class="custom-checkbox">
										<input type="checkbox" name="brand[]" value="Chosen">
										<span>Chosen</span>
									</label>
									<label class="custom-checkbox">
										<input type="checkbox" name="brand[]" value="Alphabetical">
										<span>Alphabetical</span>
									</label>
								</div>
								<a href="#" class="brand_show_more">Показать еще</a>
							</div>
						</div>

						<div class="filter_item">
							<div class="fi_title">Цена</div>
							<div class="fi_content">
								<div class="filter_price_inputs">
									<input type="number" name="price_start" class="price_start" value="0">
									<input type="number" name="price_end" class="price_end" value="10000">
								</div>
								<div class="slider">
									<div class="progress"></div>
								</div>
								<div class="range-input">
									<input type="range" class="range-min" min="0" max="10000" value="0" step="100">
									<input type="range" class="range-max" min="0" max="10000" value="10000" step="100">
								</div>
							</div>
						</div>

						<div class="filter_item">
							<div class="fi_title">Предложения <img src="/img/fi_icon.svg" class="fi_icon" alt="Свернуть"></div>
							<div class="fi_content">
								<a href="#" class="filter_link">Комплекты</a>
								<a href="#" class="filter_link">Акции (если они есть)</a>
								<a href="#" class="filter_link">Новинки (если они есть)</a>
								<a href="#" class="filter_link">Наши рекомендации</a>
								<a href="#" class="filter_link">Премиум</a>
							</div>
						</div>

						<div class="filter_item">
							<input type="reset" class="btn w-100" value="Сбросить">
						</div>

					</div>
				</form>
			</div>

			<div class="products">
				<div class="product_item">
					<a href="#">
						<img src="/img/pr1.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr2.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr3.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr4.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr1.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr2.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr3.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr4.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr1.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr2.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr3.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>

				<div class="product_item">
					<a href="#">
						<img src="/img/pr4.jpg" class="product_item_foto">
					</a>
					<a href="#" class="product_item_title">Alpha Hookah - Modes S Erida</a>
					<div class="product_item_price_row">
						<div class="product_item_sale">-70%</div>
						<div class="product_item_price">10 990₽</div>
						<div class="product_item_oldprice">13 990₽</div>
					</div>
					<div class="product_item_btns">
						<a href="#" class="add_to_cart">
							<span>Добавить в корзину</span>
							<svg class="add_cart_icon" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M9.875 10.0874V8.87489C9.875 6.06239 12.1375 3.29989 14.95 3.03739C18.3 2.71239 21.125 5.34989 21.125 8.63739V10.3624" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M11.75 28H19.25C24.275 28 25.175 25.9875 25.4375 23.5375L26.375 16.0375C26.7125 12.9875 25.8375 10.5 20.5 10.5H10.5C5.16253 10.5 4.28753 12.9875 4.62503 16.0375L5.56253 23.5375C5.82503 25.9875 6.72503 28 11.75 28Z"  stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
						<a href="#" class="add_favourites">
							<svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M15.775 26.0125C15.35 26.1625 14.65 26.1625 14.225 26.0125C10.6 24.775 2.5 19.6125 2.5 10.8625C2.5 7 5.6125 3.875 9.45 3.875C11.725 3.875 13.7375 4.975 15 6.675C16.2625 4.975 18.2875 3.875 20.55 3.875C24.3875 3.875 27.5 7 27.5 10.8625C27.5 19.6125 19.4 24.775 15.775 26.0125Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</a>
					</div>
				</div>
				

			</div>

		</div>
	</div>
</section>

<!-- Модальное окно подбор по ценам -->
<div style="display: none;" id="pobbor_po_price_modal" class="products_modal">
  <h3 class="form_title">Подборка <br>по ценам</h3>
	<div class="products_modal_list">
		<div class="product_item">
			<a href="#">
				<img src="/img/pr1_modal.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">До 200₽</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pr2_modal.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">До 400₽</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pr3_modal.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">От 200₽</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

	</div>
</div>

<!-- Модальное окно подбор по бренду -->
<div style="display: none;" id="pobbor_po_brand_modal" class="products_modal">
  <h3 class="form_title">Подборка <br>по брендам</h3>
	<div class="products_modal_list">
		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Alpha Hookah</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb2.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Antero</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb3.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Aura</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>


		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Chosen</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Conceptic</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Cosa Nostra</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Craft</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb4.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">DSH</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Euphoria</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb5.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Euro Shisha</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Hoob</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Hype</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb6.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Koress</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb7.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Mamay Customs</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">MattPear</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Maverick</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb8.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Rf</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb9.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Rukah</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb10.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Shuttle</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Werkbund</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb11.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Y.K.A.P.</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb12.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">На грани</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к бренду</a>
			</div>
		</div>

	</div>
</div>


<!-- Модальное окно подбор по стилю -->
<div style="display: none;" id="pobbor_po_style_modal" class="products_modal">
  <h3 class="form_title">Подборка <br>по стилю</h3>
	<div class="products_modal_list">
		<div class="product_item">
			<a href="#">
				<img src="/img/pb8.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Универсальные</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb1.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Современные</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb7.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Яркие</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb10.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Минимализм</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb8.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Премиальные</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

		<div class="product_item">
			<a href="#">
				<img src="/img/pb4.jpg" class="product_item_foto">
			</a>
			<a href="#" class="product_item_title">Уникальные</a>
			<div class="product_item_btns">
				<a href="#" class="add_to_cart">Перейти к подборке</a>
			</div>
		</div>

	</div>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>