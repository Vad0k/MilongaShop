<?php
use yii\helpers\Url;

//$this->params['breadcrumbs'][] = $itemCategory['label'];

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
            } else if($item['type'] == 'PAGE') {
                $url = Url::to([$item['url']]);
            } else {
                $url = '/';
            }
            if(0 != $i){
                $this->params['breadcrumbs'][] = ['label' => $item['label'], 'url' => $url];
            }else{
                $this->params['breadcrumbs'][] = $item['label'];
            }

            break;
        }
    }
}

?>

<div id="catalog-sub-category">
    <h1 class="title-section"><?=$itemCategory['label']?></h1>
	<div></div>
    <?php foreach($arrayCategory as $item):?>
        <?php
            $url = null;
            if ($item['type'] == 'CATEGORY') {
                $url = Url::to(['site/category','id'=>$item['id']]);
            } else if ($item['type'] == 'SUB-CATEGORY') {
                $url = Url::to(['site/category','id'=>$item['id']]);
            } else if ($item['type'] == 'PRODUCT') {
                $url = Url::to(['site/product-list','id'=>$item['id']]);
            } else if ($item['type'] == 'PAGE'){
                $url = Url::to([$item['url']]);
            }else {
                $url = '/';
            }

        ?>
        <a href="<?=$url?>" class="item">
            <div class="icon" style="background-image: url('<?=$item['image']?>');<?=!empty($item['position']) ? ' background-position:'.$item['position'].';':''?><?=!empty($item['bgSize']) ? ' background-size:'.$item['bgSize'].';': ''?>"></div>
            <h2><?=$item['label']?></h2>
        </a>
    <?php endforeach?>
    <div class="clear"></div>
	
	<?php if(!empty($itemCategory['article'])):?>
        <div class="article"><?=$itemCategory['article']?></div>
    <?php endif?>
       
</div>