<!-- PopUp -->
<div id="popup1" class="overlay">
	<div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
		
		<div class="content">
			<div class="title">
				<div class="h">Заказать обратный звонок</div>
				<div class="sub-h">Оставьте свои контакты,  что бы мы могли связаться с Вами</div>
			</div>
			<form action="javascript:" onsubmit="callHandler('#callback-form')" id="callback-form">
				<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
				<input type="hidden" name="form" value="Заказать обратный звонок">
				<div class="input-wrapper icon i-user">
					<input type="text" placeholder="Введите ваше имя" name="user_name" required>
				</div>
				<div class="input-wrapper icon i-phone">
					<input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
				</div>
				<!-- <div class="input-wrapper icon i-mail">
					<input type="mail" placeholder="Введите ваш e-mail">
				</div> -->
				<button class="btn btn-form btn-shadow">Перезвоните мне</button>
			</form>
		</div>
	</div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-request" class="overlay">
	<div class="popup">
        <?php get_template_part('templates/parts/modal-head') ?>
		
		<div class="content">
			<div class="title">
				<div class="h">Оставить заявку</div>
				<div class="sub-h">Оставьте свои контакты, что бы мы могли связаться с Вами</div>
			</div>
			<form action="javascript:" onsubmit="callHandler('#request-form')" id="request-form">
				<input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
				<input type="hidden" name="form" value="Заказать обратный звонок">
				<div class="input-wrapper icon i-user">
					<input type="text" placeholder="Введите ваше имя" name="user_name" required>
				</div>
				<div class="input-wrapper icon i-phone">
					<input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
				</div>
				<div class="input-wrapper icon i-mail">
					<input type="mail" placeholder="Введите ваш e-mail">
				</div>
				<button class="btn btn-form btn-shadow">Оставить заявку</button>
			</form>
		</div>
	</div>
</div>
<!-- /PopUp -->
<!-- PopUp -->
<div id="popup-thx" class="overlay">
	<div class="popup">
		<?php get_template_part('templates/parts/modal-head') ?>
		<div class="content">
			<div class="title">
				<div class="h">Спасибо за обращение!</div>
				<div class="sub-h">Мы получили вашу заявку.</div>
			</div>
			<a href="#" rel="modal:close" class="btn btn-form btn-shadow">Закрыть окно</a>
		</div>
	</div>
</div>
<!-- /PopUp -->