<?php
use yii\helpers\Url;

for($i = count($arrayAllStepNav)-1; $i >=0; $i--){
    foreach($arrayAllNavLeft as $item){
        if($item['id']==$arrayAllStepNav[$i]){
            $url = '/';
            if ($item['type'] == 'CATEGORY') {
                $url = Url::to(['site/category','id'=>$item['id']]);
            } else if ($item['type'] == 'SUB-CATEGORY') {
                $url = Url::to(['site/category','id'=>$item['id']]);
            } else if ($item['type'] == 'PRODUCT') {
                $url = Url::to(['site/product-list','id'=>$item['id']]);
            } else {
                $url = '/';
            }
            //if(0 != $i){
                $this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => $url];
            //}else{
                //$this->params['breadcrumbs'][] = $item['label'];
            //}

            break;
        }
    }
}
$this->params['breadcrumbs'][] = $itemProduct['title'];
?>


<div id="product-description" data-url="<?=Url::to(['site/product'])?>" itemscope itemtype="http://schema.org/Product">
    <div class="col-left" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
        <meta itemprop="priceCurrency" content="RUB" />
        <meta itemprop="image" content="<?=$itemProduct['image']?>" />
        <div class="image" style="background-image: url('<?=$itemProduct['image']?>')<?=!empty($itemProduct['image'])? ';background-size:'.$itemProduct['bgSize']:''?>">
            <div class="price"><?php if($itemProduct['price'] > 0):?><span itemprop="price" content="<?=$itemProduct['price']?>"><?=number_format($itemProduct['price'],0,'',' ')?></span> руб.<?php else:?><span>Цену уточняйте</span><?php endif;?></div>
        </div>
		<?php if($itemProduct['price'] > 0):?>
        <div class="panel-box">
            <a href="<?=Url::to(['basket/add','id'=>$id])?>" class="button btn-add-basket" rel="nofollow">Добавить в корзину</a>
        </div>
		<?php endif;?>	
    </div>
    <div class="col-right">
        <h1 class="h1" itemprop="name"><?=$itemProduct['title']?></h1>
        <div class="code">PRODUCT CODE: <?=$itemProduct['product_code']?></div>
        <table class="params">

            <?php if(in_array(0, json_decode($itemProduct['params']))):?>
                <tr>
                    <th>Цвет:</th>
                    <td>
                        <select class="select select-product" id="select-chose-product" data-url="<?=Url::to(['site/product','id'=>''])?>">
                            <option value="-1">Выбрать цвет</option>
                            <?php foreach($arrayProduct as $item):?>
                                <option value="<?=$item['id']?>"<?=($item['id']!==$id) ?'':' selected="selected"'?>><?=$item['title']?></option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
            <?php endif;?>

            <?php foreach($arrayListProductParams as $itemParam):?>
                <tr>
                    <th><?=$itemParam['title']?>:</th>
                    <td>
                        <select class="select select-product" data-id="<?=$itemParam['id']?>" data-type="select-params">
                            <?php foreach(json_decode($itemParam['values']) as $i=>$item):?>
                                <option value="<?=$i?>"> <?=$item.' '.$itemParam['unit']?> </option>
                            <?php endforeach;?>
                        </select>
                    </td>
                </tr>
            <?php endforeach;?>

        </table>

        <?php if(!empty($itemProduct['description'])):?>
            <div class="title">ОПИСАНИЕ:</div>
            <div class="description" itemprop="description"><?=$itemProduct['description']?></div>
        <?php endif;?>

        <?php if(false && !empty($itemProduct['description_more'])):?>
            <div class="title">ДОПОЛНИТЕЛЬНАЯ ИНФОРМАЦИЯ:</div>
            <div class="addition-description" itemprop="description"><?=$itemProduct['description_more']?></div>
        <?php endif?>

    </div>
</div>

<hr/>
<?php if(!empty($arrayListSimilar)):?>
<div id="product-list">
    <div class="title-section">Похожие товары:</div>
    <div></div>
    <?php foreach($arrayListSimilar as $item):?>
        <a href="<?=Url::to(['site/product','id'=>$item['id']])?>" class="item">
            <div class="image" style="background-image: url('<?=$item['image']?>')<?=!empty($item['bgSize']) ? ';background-size:'.$item['bgSize']:''?><?=!empty($item['bgPosition'])?';background-position:'.$item['bgPosition'].';':''?>"></div>
            <h2 class="title"><?=$item['title']?></h2>
            <div class="panel">
                <div class="price">Цена: <?=number_format($item['price'],0,'',' ')?> руб.</div>
                <div class="basket">&#128722</div>
            </div>
        </a>
    <?php endforeach;?>
</div>
<?php endif;?>

<script>
    /*window.onload = function(){
        $('#product-description .image').loupe({
            width: 200, // ширина лупы
            height: 150, // высота лупы
            //loupe: 'loupe' // css класс лупы
        });
    };*/
</script>

<style>
    #product-list{
        margin-top: 50px;
        float: left;
        width: 100%;
    }
</style>