<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;

$arrayItems = [];
foreach($arrayCategory as $item){
    $url = '';
    if ($item['type'] == 'CATEGORY') {
        $url = Url::to(['site/category','id'=>$item['id']]);
    } else if ($item['type'] == 'SUB-CATEGORY') {
        $url = Url::to(['site/category','id'=>$item['id']]);
    } else if ($item['type'] == 'PRODUCT') {
        $url = Url::to(['site/product-list','id'=>$item['id']]);
    } else if($item['type'] == 'PAGE'){
        $url = Url::to([$item['url']]);
    } else {
        $url = '/';
    }

    $arrayItems[] = ['label'=>$item['label'], 'url'=>$url,'linkOptions'=>['role'=>'menuitem']];
}
//arrayCategory
?>
<aside id="header-contacts">
    <div class="container">
        <span class="address">Россия, Республика Крым,  г. Симферополь, площадь Куйбышева, ул.Тренева 1, (2 этаж), (вход  со стороны ул.Богдана Хмельницкого)</span>
        <a href="mailto:milongashop@mail.ru" class="email">✉ milongashop@mail.ru</a>
        <a href="tel:++79787377440" class="phone">✆ +7 (978) 737-74-40</a>
    </div>
</aside>
<header id="section-header-nav">
    <div class="container">

        <a href="<?=Url::to(['basket/show'])?>" class="basket" rel="nofollow">
            <span class="count" data-url="<?=Url::to(['basket/get-count-product'])?>">(<?=isset($session['basket']) ? count($session['basket']) : 0?>)</span>
            <div class="icon"></div>
        </a>
        <div class="icon-mobile"></div>
        <nav class="nav" role="navigation">
            <a href="<?=Url::to(['site/index'])?>" class="logo"><img src="<?=Yii::getAlias('@web/images/logo.svg')?>" alt="логотип Милонга - всё для танцев"></a>
            <?=Nav::widget([
                'items'=>[
                    [
                        'label'=>'ГЛАВНАЯ',
                        'url'=>['site/index'],
                        'linkOptions'=>['role'=>'menuitem']
                    ],
                    [
                        'label'=>'АКЦИИ',
                        'url'=>['site/discount'],
                        'linkOptions'=>['role'=>'menuitem']
                    ],
                    [
                        'label'=>'КАТАЛОГ ТОВАРОВ',
                        'linkOptions'=>['role'=>'menuitem'],
                        'items'=>$arrayItems
                    ],
                    [
                        'label'=>'САЛОН-АТЕЛЬЕ "МИЛОНГА"',
                        'url'=>['site/category','id'=>11],
                        'linkOptions'=>['role'=>'menuitem'],
                        /*'items'=>[
                            [
                                'label'=>'Бланк заказа',
                                'url'=>['site/blank-order-salon-atelye'],
                                'linkOptions'=>['role'=>'menuitem']
                            ],
                            [
                                'label'=>'Галерея',
                                'url'=>['site/gallery'],
                                'linkOptions'=>['role'=>'menuitem']
                            ],
                        ]*/

                    ],
                    [
                        'label'=>'КАК СНЯТЬ МЕРКИ',
                        'url'=>['site/index'],
                        'linkOptions'=>['role'=>'menuitem'],
                        'items'=>[
                            [
                                'label'=>'Обувь',
                                'url'=>['site/how-measure-shoes'],
                                'linkOptions'=>['role'=>'menuitem']
                            ],
                            [
                                'label'=>'Одежда',
                                'url'=>['site/how-measure-dress'],
                                'linkOptions'=>['role'=>'menuitem']
                            ],
                            [
                                'label'=>'Пуанты',
                                'url'=>['site/how-measure-pointe-shoes'],
                                'linkOptions'=>['role'=>'menuitem']
                            ],
                        ]
                    ],
                    [
                        'label'=>'ДОСТАВКА И ОПЛАТА',
                        'url'=>['site/delivery-and-pay-methods'],
                        'linkOptions'=>['role'=>'menuitem']
                    ],
                    [
                        'label'=>'КОНТАКТЫ',
                        'url'=>['site/contacts'],
                        'linkOptions'=>['role'=>'menuitem']
                    ]
                ],
                'options'=>['class'=>'menu']

            ])?>

        </nav>

    </div>
    <div class="clear"></div>
</header>