<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<section class="catalog_top" style="background-image: url(/img/kalyany_top.jpg);">
	<div class="container">
		<div class="breadcrumbs">
			<a href="/">Главная</a>
			<img src="/img/breadcrumb.svg">
			<a href="/catalog/">Каталог</a>
			<img src="/img/breadcrumb.svg">
			<span>Кальяны</span> 
		</div>
		<h2 class="catalog_title">Кальяны</h2>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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
						<a href="#" class="add_to_cart">Добавить в корзину <img src="/img/cart.svg" alt="Иконка корзины"></a>
						<a href="#" class="add_favourites"><img src="/img/heart.svg" alt="Избранное иконка"></a>
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