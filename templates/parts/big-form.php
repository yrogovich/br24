<div class="section deep-blue" id="big-form-section">
    <div class="container">
        <div class="row">
            <div class="form-column">
                <div class="title">Мы с радостью сделаем бесплатную <span class="d-block">оценку Вашего проекта</span></div>

                <form action="javascript:" onsubmit="callHandler('#big-form')" id="big-form">
                    <input type="hidden" name="url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
                    <input type="hidden" name="form" value="Бесплатная оценка проекта">

                    <div class="pair">
                        <div class="input-row flex-size-1">
                            <div class="input-wrapper icon i-user">
                                <input type="text" placeholder="Введите ваше имя" name="user_name" required>
                            </div>
                            <div class="input-wrapper icon i-phone">
                                <input type="text" placeholder="Ваш № телефона" name="user_phone" class="phone-mask" required>
                            </div>
                            <div class="input-wrapper icon i-mail">
                                <input type="mail" placeholder="Введите ваш e-mail">
                            </div>
                        </div>
                        <!-- /.input-row -->
                        <div class="input-wrapper flex-size-2">
                            <textarea name="user_message" placeholder="Опишите проект"></textarea>
                        </div>
                    </div>
                    
                    <button class="btn btn-form btn-shadow">Отправить на оценку</button>
                    <div class="privacy">
                        <input type="checkbox" id="privacy_checkbox" required>
                        <label class="small-text" for="privacy_checkbox">Я ознакомлен с <a href="<?php echo get_home_url(null, 'privacy-policy/') ?>" class="link">Политикой конфиденциальности</a> и даю согласие на сбор, обработку и хранение
моих персональных данных.</label>
                    </div>
			    </form>
            </div>
            <!-- /.form-column -->
            <div class="boss-column">
                <div class="img-wrapper">
                    <img src="<?php bloginfo('template_url') ?>/src/img/context/boss.png" alt="Вячеслав Пракопенко">
                </div>
                <div class="label">
                    <div class="position">Основатель компании</div>
                    <div class="name">Вячеслав Пракопенко</div>
                </div>
            </div>
            <!-- /.boss-column -->
        </div>
        <!-- /.row -->
    </div>
</div>
<!-- /#big-form-section -->
