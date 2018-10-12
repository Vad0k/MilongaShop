<?php
use \yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
?>
<footer id="footer">
    <div class="container" itemscope itemtype="http://schema.org/Organization">
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <!--Россия, Республика Крым, г.Симферополь, проспект Кирова 78, ТЦ «Палас» (2 этаж, павильон №53)-->
            <meta itemprop="addressCountry " content="Россия" />
            <meta itemprop="addressRegion" content="Крым" />
            <meta itemprop="addressLocality" content="Симферополь" />
            <meta itemprop="streetAddress" content="ул.Тренева, 1" />
            <meta itemprop="postalCode" content="295053" />
        </div>
        <div class="item">
            <div class="logo" itemprop="name" content="Милонга">Милонга™</div>
            <div class="description">Всё для танцев!!!</div>
        </div>
        <div class="item">
            <div class="title">НАШИ КОНТАКТЫ</div>
            <span class="bold">E-Mail: <a href="mailto:milongashop@mail.ru" itemprop="email">milongashop@mail.ru</a></span>
            <span class="bold">Телефон: <a href="tel:+7(978)737-74-40" itemprop="telephone">+7(978)737-74-40</a></span>
            <span class="bold">vk: <a href="https://vk.com/milonga_shop">milonga_shop</a></span>
        </div>
        <?php $form = ActiveForm::begin([
            'method'=>'post',
            'action'=>Url::to(['site/get-contacts']),
            'id'=>'form-get-contacts',
            'options' => [
                'class' => 'item'
            ],
            'fieldConfig' => [
                'template' => "{input}",
            ],
        ]);?>
            <div class="title">СВЯЗАТЬСЯ С НАМИ</div>
            <?= $form->field($modelGetContacts, 'phone')->widget(MaskedInput::className(), [
                'mask' => '+7(999)999-99-99',
                'options'=>[
                    'class'=>'input',
                    'placeholder'=>'Введите Ваш телефон'
                ]
            ]); ?>
            <?= $form->field($modelGetContacts, 'email')->widget(MaskedInput::className(), [
                'clientOptions'=>['alias'=>'email'],
                'options'=>[
                    'class'=>'input',
                    'placeholder'=>'Введите Ваш Email'
                ]
            ]); ?>

            <button class="button">Отправить</button>
        <?php $form->end();?>
        <div class="scroll-up">^</div>
    </div>
    <div class="clear"></div>
    <div class="footer-dev">
        &copy; <?=date('Y')=='2017'?'2017':'2017-'.date('Y')?> Все права защищены, интернет магазин «Милонга». Сайт разработали и продвинули: <a href="https://vk.com/vad0kistails">Vad0k</a> и <a href="">Ivan</a>
    </div>
</footer>

<?php Modal::begin([
    'header'=>'<h2 class="title">Ваша корзина</h2>',
    'id'=>'basket-cart',
    'size'=>'modal-lg',
    'footer'=>'
        <button class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
        <a href="'.(Url::to(['basket/clear-basket'])).'" class="btn btn-danger clear-basket">Очистить корзину</a>
        <a href="'.(Url::to(['basket/order'])).'" class="btn btn-success">Перейти к оформлению</a>
    '
])?>
<?php Modal::end()?>

<?php Modal::begin([
    'header'=>'<h2 class="title"></h2>',
    'id'=>'simple-alert',
    'size'=>'modal-lg',
    'footer'=>'<button class="btn btn-default" data-dismiss="modal">Закрыть</button>'
])?>
<?php Modal::end()?>

<!-- Yandex.Metrika counter --> <script> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45956352 = new Ya.Metrika({ id:45956352, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45956352" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106473142-1"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-106473142-1');
</script>
