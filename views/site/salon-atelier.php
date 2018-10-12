<?php
    $this->params['breadcrumbs'][] = ['label' => 'САЛОН-АТЕЛЬЕ "МИЛОНГА"', 'url' => ['/site/category','id'=>11]];
    $this->params['breadcrumbs'][] = 'Заказать костюм для танцев (Индивидуальный пошив)';
    use yii\helpers\Url;
?>
<article class="article">
    <h1>Вас приветствует Салон-ателье «Милонга».<br/>У нас вы можете заказать костюм для танцев.</h1>
    <div class="article-discount">Мы сделаем<br /> Ваш танец<br /> ярче</div>
    <br />
    <p>Заказать у Нас нужный костюм совсем легко:</p>
    <ol>
        <li>Укажите направление танца.</li>
        <li>Расскажите, что Вы хотите: стиль, цвет...</li>
        <li>Предлагаемый бюджет костюма.</li>
        <li>Если нет идей, просто доверьтесь Нам. Наши опытные дизайнеры и модельеры создадут для Вас эксклюзивный образ.</li>
        <li>Нужно заполнить <a href="<?=Url::to(['/site/blank-order-salon-atelye'])?>">карту мерок</a>. Наши художники подготовят эскиз.</li>
        <li>По желанию можно выслать фото в полный рост(для точного подбора фасона).</li>
        <li>Мы шьем без примерок.</li>
        <li>Наши художники подготовят эскиз.На этом этапе необходима небольшая предоплата. После утверждения эскиза мы начинаем работать.</li>
        <li>Стоимость изделия зависит от множества вещей - сложности работы, стоимости тканей и аксессуаров.</li>

        <li>Мы всегда подберем и найдем удобный вариант.</li>
    </ol>
    <p>Наши изделия всегда выглядят индивидуально и неповторимо.</p>
    <p>Все изделия выполнены очень качественно и с большой любовью.</p>
    <p class="bold">МЫ СДЕЛАЕМ ВАШ ТАНЕЦ ЯРЧЕ!</p>
</article>
<style>
    .article{
        position: relative;
        overflow: hidden;
    }
    .article .article-discount{
        position: absolute;
        right: -114px;
        top: 21px;
        font-style: italic;
        color: #FFF;
        background-image: url(images/bg-3.jpg);
        transform: translate(0,0%) rotate(45deg);
        padding: 15px 130px 15px;
        text-align: right;
        font-size: 12px;
        box-shadow: 1px -1px 3px #666;
    }
    .article h1, .article p{
        position: relative;
        z-index: 1;
    }
    .article a{
        color: #f50000;
    }
    .article a:hover{
        text-decoration: underline!important;
    }
</style>