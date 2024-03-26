(function($){
	var width = $(document).width();
	//Скрыть информацию в шапке
	$('.close_info_btn').click(function(){
		$('.header_info').hide();
	});

	//Мобильное меню
	$('.header_mob_menu').click(function(){
		$(this).toggleClass('active');
		$('.mob_menu').css('top', $('header').height()).toggle();
	});
	//Поменяем текст кнопки в мобильной версии
	function replace_text(){
		let width = $(document).width();
		if(width <= 767){
			$('.add_to_cart span').text('В корзину');
		} else{
			$('.add_to_cart span').text('Добавить в корзину');
		}
	}

	replace_text();

	$(window).resize(function(){
		replace_text();
	})
	
	//Поиск
	if(width >= 992){
		$('.search_icon').click(function(e){
			e.preventDefault();
			$(this).hide();
			if($(document).width() >= 1151){
				$('.header_menu').hide();
			}
			$('.search_block').addClass('active');
			$('.search_input').show();
		});

		$('.search_close').click(function(e){
			e.preventDefault();
			$('.search_block').removeClass('active');
			$('.search_input').hide();
			$('.search_icon').show();
			if($(document).width() >= 1151){
				$('.header_menu').show();
			}
		});

	} else {
		$('.search_icon').click(function(e){
			e.preventDefault();
			$(this).hide();
			$('.search_content').css('top', $('header').height()).show();
		});

		$('.search_close').click(function(e){
			e.preventDefault();
			$('.search_block').removeClass('active');
			$('.search_content').hide();
			$('.search_icon').show();
		});

	}
	

	$('#search').keyup(function(){
		let val = $(this).val();
		if(val != ''){
			$('.search_result').css('display', 'grid');
		} else{
			$('.search_result').hide();
		}
	});

	//Каталог
	$('.catalog_btn').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$(this).next().toggle();

	});

	//Открытие всплывашки авторизации
	$('.lk_header_btn .header_btn_link').click(function(e){
		e.preventDefault();
		$('.auth_modal').show();
	});

	//Закрытие всплывашки авторизации
	$('.auth_modal_close').click(function(){
		$('.auth_modal').hide();
	});

	//Открытие всплывашки регистрации
	$('.register_modal_btn').click(function(e){
		e.preventDefault();
		$('.auth_modal').hide();
		$('.register_modal').show();
	});

	//Закрытие всплывашки регистрации
	$('.register_modal_close').click(function(){
		$('.register_modal').hide();
		$('.register_step').hide();
		$('.register_step_start').text(1);
		$('.register_steps_container').find(`[step='1']`).show();
	});

	//Переключение на физ.лицо и юр. лицо
	$('.user_type').click(function(){
		$('.user_type').removeClass('active');
		$(this).addClass('active');
		let type = $(this).attr('data-type');
		$('.user_type_checkbox').prop('checked', false);
		$(type).prop('checked', true);
		if($('#user_type_fiz').is(':checked')){
			$('.register_step_end').text(2);
		} else {
			$('.register_step_end').text(3);
		}
	});

	//Регистрация шаги
	$('.register_next_btn').click(function(e){
		e.preventDefault();
		if($('#user_type_fiz').is(':checked')){
			$('.register_step_start').text(2);
			$('.register_step').hide();
			$('.register_steps_container').find(`[step='3']`).show();
		} else {
			let step = parseInt($(this).parents('.register_step').attr('step')) + 1;
			console.log(step);
			$('.register_step_start').text(step);
			$('.register_step').hide();
			$('.register_steps_container').find(`[step=` + step+ `]`).show();
		}
	});

	//Открытие всплывашки сброса пароля
	$('.forget_pass').click(function(e){
		e.preventDefault();
		$('.auth_modal').hide();
		$('.forget_modal').show();
	});
	//Закрытие всплывашки сброса пароля
	$('.forget_modal_close').click(function(){
		$('.forget_modal').hide();
	});

	//Каталог фильтр цены
	const rangeInput = document.querySelectorAll(".range-input input"),
  priceInput = document.querySelectorAll(".filter_price_inputs input"),
  range = document.querySelector(".slider .progress");
	let priceGap = 1000;

	priceInput.forEach((input) => {
		input.addEventListener("input", (e) => {
			let minPrice = parseInt(priceInput[0].value),
				maxPrice = parseInt(priceInput[1].value);

			if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput[1].max) {
				if (e.target.className === "price_start") {
					rangeInput[0].value = minPrice;
					range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
				} else {
					rangeInput[1].value = maxPrice;
					range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
				}
			}
		});
	});

	rangeInput.forEach((input) => {
		input.addEventListener("input", (e) => {
			let minVal = parseInt(rangeInput[0].value),
				maxVal = parseInt(rangeInput[1].value);

			if (maxVal - minVal < priceGap) {
				if (e.target.className === "range-min") {
					rangeInput[0].value = maxVal - priceGap;
				} else {
					rangeInput[1].value = minVal + priceGap;
				}
			} else {
				priceInput[0].value = minVal;
				priceInput[1].value = maxVal;
				range.style.left = (minVal / rangeInput[0].max) * 100 + "%";
				range.style.right = 100 - (maxVal / rangeInput[1].max) * 100 + "%";
			}
		});
	});

	//Фильтр
	$('.cf_btn').click(function(e){
		e.preventDefault();
		let products = $('.catalog_list .products');
		let filter = $('.filter');
		filter.toggleClass('active');
		let width = $(document).width();
		let column_active = 3;
		let column_def = 4;
		if(width >= 1300){
			column_def = 4;
			column_active = 3;
		} else if(width <= 1299){
			column_def = 3;
			column_active = 2;
		} else{
			return;
		}

		if(width >= 991){
			if(filter.hasClass('active')){
				filter.show();
				products.css("grid-template-columns", `repeat(${column_active}, 1fr)`);
			} else {
				filter.hide();
				products.css("grid-template-columns", `repeat(${column_def}, 1fr)`);
			}
		}
	});

	$('.filter_close').click(function(e){
		e.preventDefault();
		$('.filter').removeClass('active');
	})

	//Подбор
	$('.ch_btn').click(function(e){
		$('.ch_btn').removeClass('active');
		$(this).addClass('active');
	});

	//Страница товара, табы
	$('.product_tab').click(function(){
		let id = $(this).attr('tab');
		$('.product_tab').removeClass('active');
		$(this).addClass('active');
		$('.product_tab_content').removeClass('active');
		$('#'+id).addClass('active');
	});

	//Related slider
	let related_slider = $('.related_products_slider');
	related_slider.slick({
		prevArrow: $('.slick_prev'),
		nextArrow: $('.slick_next'),
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		centerMode: true,
		responsive: [
			{
				breakpoint: 1350,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 1100,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 767,
				settings: {
					centerMode: false,
					slidesToShow: 1,
				}
			}
		]
	});

	//Переключатель бонус
	$(window).keyup(function(e){
		var target = $('.checkbox-ios input:focus');
		if (e.keyCode == 9 && $(target).length){
			$(target).parent().addClass('focused');
		}
	});
	$('.checkbox-ios input').focusout(function(){
		$(this).parent().removeClass('focused');
	});

	//Удаление товара из корзины
	$('.cart_delete_product').click(function(e){
		e.preventDefault();
		$(this).parents('.cart_product').remove();
	});

	//Количество товаров на странице корзины
	$('.cp_plus').click(function(){
		let el = $(this).prev();
		el.val(parseInt(el.val()) + 1);
	});

	$('.cp_minus').click(function(){
		let el = $(this).next();
		if(parseInt(el.val()) > 1){
			el.val(parseInt(el.val()) - 1);
		}	
	});

	//Переключения метода доставки
	$('.delivery_item').click(function(){
		$('.delivery_item').removeClass('active');
		$(this).addClass('active');

		$(".delivery_item input[type='checkbox']").prop('checked', false);
		$(this).find("input[type='checkbox']").prop('checked', true);

		$('.delivery_content').hide();
		$('#' + $(this).attr('tab')).show();
	});

	//Переключения метода оплаты
	$('.pay_item').click(function(){
		$('.pay_item').removeClass('active');
		$(this).addClass('active');

		$(".pay_item input[type='checkbox']").prop('checked', false);
		$(this).find("input[type='checkbox']").prop('checked', true);
	});

	//Добавление клиента
	$('.client_info_add_btn').click(function(e){
		e.preventDefault();
		let client_name = $('#client_info_name').val();
		let client_tel = $('#client_info_tel').val();
		let client_email = $('#client_info_email').val();
		$('.client_info_list').empty();
		$('.client_info_list').append(`<a data-fancybox href='#client_info_add' class='client_info_item cii_edit'>
			<div class='client_foto'><img src='/img/client_add.svg' alt='Иконка'></div>
			<div class='client_info_content'>
				<h3 class='client_name'>${client_name}<img src='/img/edit.svg' class='client_edit'></h3>
				<div class='client_info_desc'>${client_tel}</div>
				<input type='hidden' name='client_name' value='${client_name}'/>
				<input type='hidden' name='client_tel' value='${client_tel}'/>
				<input type='hidden' name='client_email' value='${client_email}'/>
			</div>
		</a>`);

		$('.client_info_list').append(`<a data-fancybox href='#client_info_add' class='client_info_item cii_other_add'>
			<div class='client_foto'><img src='/img/client_add.svg' alt='Иконка'></div>
			<div class='client_info_content'>
				<h3 class='client_name'>Другой человек<img src='/img/edit.svg' class='client_edit'></h3>
				<div class='client_info_desc'>Заполните данные</div>
			</div>
		</a>`);
		client_info_form_empty();
		$.fancybox.close();
	});

	function client_info_form_empty(){
		$('#client_info_name').val('');
		$('#client_info_tel').val('');
		$('#client_info_email').val('');
	}
	$('.client_info_list').on('click','.cii_other_add',function(){
		client_info_form_empty();
	});

	$('.client_info_list').on('click','.cii_edit',function(){
		let client_name = $(".cii_edit input[name='client_name']").val();
		let client_tel = $(".cii_edit input[name='client_tel']").val();
		let client_email = $(".cii_edit input[name='client_email']").val();
		$('#client_info_name').val(client_name);
		$('#client_info_tel').val(client_tel);
		$('#client_info_email').val(client_email);
	});

	//Добавление адреса
	$('.client_address_add_btn').click(function(e){
		e.preventDefault();
		let address = $('#client_address').val();
		let entrance = $('#client_entrance').val();
		let flat = $('#client_flat').val();
		let floor = $('#client_floor').val();
		let doorphone = $('#client_doorphone').val();
		let comment = $('#client_comment').val();

		$('.client_address_list').empty();
		$('.client_address_list').append(`
			<a data-fancybox="" href="#client_address_add" class="pickup_address client_address client_address_edit">
				<div class="pickup_icon">
					<img src="/img/pickup.svg">
				</div>
				<div class="pickup_content">
					<div class="pickup_title">${address}</div>
				</div>
				<input type='hidden' name='order_address' value='${address}'/>
				<input type='hidden' name='order_entrance' value='${entrance}'/>
				<input type='hidden' name='order_flat' value='${flat}'/>
				<input type='hidden' name='order_floor' value='${floor}'/>
				<input type='hidden' name='order_doorphone' value='${doorphone}'/>
				<input type='hidden' name='order_comment' value='${comment}'/>
		</a>`);

		$('.client_address_list').append(`
			<a data-fancybox="" href="#client_address_add" class="pickup_address client_address client_address_other_add">
				<div class="pickup_icon">
					<img src="/img/pickup.svg">
				</div>
				<div class="pickup_content">
					<div class="pickup_title">Добавить другой адрес</div>
					<div class="pickup_desc">Заполните данные</div>
				</div>
		</a>`);
		address_form_empty();
		$.fancybox.close();
	});

	function address_form_empty(){
		$('#client_address').val('');
		$('#client_entrance').val('');
		$('#client_flat').val('');
		$('#client_floor').val('');
		$('#client_doorphone').val('');
		$('#client_comment').val('');
	}
	$('.client_address_list').on('click','.client_address_other_add',function(){
		address_form_empty();
	});

	$('.client_address_list').on('click','.client_address_edit',function(){
		let address = $(".client_address_edit input[name='order_address']").val();
		let entrance = $(".client_address_edit input[name='order_entrance']").val();
		let flat = $(".client_address_edit input[name='order_flat']").val();
		let floor = $(".client_address_edit input[name='order_floor']").val();
		let doorphone = $(".client_address_edit input[name='order_doorphone']").val();
		let comment = $(".client_address_edit input[name='order_comment']").val();

		$('#client_address').val(address);
		$('#client_entrance').val(entrance);
		$('#client_flat').val(flat);
		$('#client_floor').val(floor);
		$('#client_doorphone').val(doorphone);
		$('#client_comment').val(comment);
	});

	//Избранное удаление товаров
	$('.favourites_empty_btn').click(function(e){
		e.preventDefault();
		$('.favourites_list').empty();
	});

	//Личный кабинет
	$('.account_info_item').click(function(){
		let name = $(this).find("input[name='account_name']").val();
		let tel = $(this).find("input[name='account_tel']").val();
		let email = $(this).find("input[name='account_email']").val();
		$('#client_info_name').val(name);
		$('#client_info_tel').val(tel);
		$('#client_info_email').val(email);
	});

	$('.account_info_edit_btn').click(function(e){
		e.preventDefault();
		let name = $('#client_info_name').val();
		let tel = $('#client_info_tel').val();
		let email = $('#client_info_email').val();
		$('.account_client_info').empty();
		$('.account_client_info').append(`<a data-fancybox href='#client_info_add' class='account_item client_info_item account_info_item'>
			<div class='client_foto'><img src='/img/client_add.svg' alt='Иконка'></div>
			<div class='client_info_content'>
				<h3 class='client_name'>${name}<img src='/img/edit.svg' class='client_edit'></h3>
				<div class='client_info_desc'>${tel}</div>
				<input type='hidden' name='account_name' value='${name}'/>
				<input type='hidden' name='account_tel' value='${tel}'/>
				<input type='hidden' name='account_email' value='${email}'/>
			</div>
		</a>`);
		address_form_empty();
		$.fancybox.close();
	});

	$('.account_address_add_btn').click(function(e){
		e.preventDefault();
		let address = $("input[name='order_address']").val();
		let entrance = $("input[name='order_entrance']").val();
		let flat = $("input[name='order_flat']").val();
		let floor = $("input[name='order_floor']").val();
		let doorphone = $("input[name='order_doorphone']").val();
		let comment = $("input[name='order_comment']").val();
		$.fancybox.close();
	});

	//Меню в мобилке
	// let width = $(document).width();
	// if(width <= 767){
	// 	$('.header_btn_link').click(function())
	// }
})( jQuery );