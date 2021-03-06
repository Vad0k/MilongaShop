<?php
    $this->params['breadcrumbs'][] = ['label' => 'САЛОН-АТЕЛЬЕ "МИЛОНГА"', 'url' => ['/site/category','id'=>11]];
    $this->params['breadcrumbs'][] = 'Бланк заказа';

?>
<article class="article">
    <h1>Бланк заказа на индививдуальный пошив</h1>
    <img src="<?=Yii::getAlias('@web/images/pages/karta-merok-na-individualniy-poshiv.gif')?>" alt="карта мерок на индивидуальный пошив" style="max-width: 100%; width: 100%;"/>
    <a class="my-btn" href="<?=Yii::getAlias('@web/images/pages/karta-merok-na-individualniy-poshiv.gif')?>" download="download">Скачать бланк</a>
    <div class="table-responsive">
        <table class="table-default table-hover">
            <caption>ИЗМЕРЕНИЕ ФИГУРЫ</caption>
            <tr>
                <th>A - ОГ</th>
                <td>- объем груди</td>
            </tr>
            <tr>
                <th>B - ОТ</th>
                <td>- объем талии.</td>
            </tr>
            <tr>
                <th>B1 - ОБ</th>
                <td>- объем бедер.</td>
            </tr>
            <tr>
                <th>B2 - ОК10</th>
                <td>- объем кокетки на 10см ниже объема талии.</td>
            </tr>
            <tr>
                <th>C - ШП</th>
                <td>- ширина переда (между передними углами подмышечных впадин над грудью).</td>
            </tr>
            <tr>
                <th>C1 - ШП1</th>
                <td>- или ширина груди (между передними углами подмышечных впадин горизонтально, по самым выступающим точкам груди).</td>
            </tr>
            <tr>
                <th>C2 - ШС</th>
                <td>- ширина спины (горизонтально, между задними углами подмышечных впадин по наиболее выступающим точкам лопаток).</td>
            </tr>
            <tr>
                <th>A1 - ОГ1</th>
                <td>- объем над грудью.</td>
            </tr>
            <tr>
                <th>A2 - ОГ2</th>
                <td>- объем под грудью.</td>
            </tr>
            <tr>
                <th>D - ДТП</th>
                <td>- длина переда до талии (от основания шеи вертикально через высокую точку груди до естественной линии талии).</td>
            </tr>
            <tr>
                <th>D1 - ДТП1</th>
                <td>- длина переда до талии 1 (по центру от яремной впадины, основания шеи, вертикально, до естественной линии талии).</td>
            </tr>
            <tr>
                <th>D2 - ДТС</th>
                <td>- длина спины (от седьмого шейного позвонка вертикально вниз до естественной линии талии вдоль позвоночника).</td>
            </tr>
            <tr>
                <th>D3 - ДБ</th>
                <td>- длина бока (от подмышечной впадины до естественной линии талии).</td>
            </tr>
            <tr>
                <th>A3 - ВГ</th>
                <td>- высота груди.</td>
            </tr>
            <tr>
                <th>A4 - ЦГ</th>
                <td>- центр груди.</td>
            </tr>
            <tr>
                <th>C3 - Шп</th>
                <td>- ширина плеча (от основания шеи по плечевому шву до плечевой точки). Пожалуйста, укажите форму плеч : нормальные, покатые, прямые.</td>
            </tr>
            <tr>
                <th>F - ДР/м</th>
                <td>- длина руки (от плечевой точки до запястья через локоть согнутой руки. Дополнительная мерка для мужчин - от седьмого шейного позвонка до плечевой косточки и затем вдоль вытянутой руки до запястья).</td>
            </tr>
            <tr>
                <th>F1 - ДРвнт</th>
                <td>- длина руки внутренняя (от подмышечной впадины до запястья вдоль вытянутой руки).</td>
            </tr>
            <tr>
                <th>F2 - Окат</th>
                <td>- окружность плеча (окружность руки в основании плеча по самой высокой косточке плечевого сустава - плечевой точке).</td>
            </tr>
            <tr>
                <th>F3 - Опр</th>
                <td>- объем предплечья (но уровне углов подмышечных впадин).</td>
            </tr>
            <tr>
                <th>F4 - ОЗ</th>
                <td>- объем запястья.</td>
            </tr>
            <tr>
                <th>F5 - Окисти</th>
                <td>- объем кисти / - длина кисти руки (от запястья до начала фалонги пальцев).</td>
            </tr>
            <tr>
                <th>B3 - ОШос</th>
                <td>- объем шеи в основании.</td>
            </tr>
            <tr>
                <th>B4 - ОШпкд</th>
                <td>- объем середины шеи / высота шеи</td>
            </tr>
            <tr>
                <th>D4 - Всдн</th>
                <td>- высота сидения (измеряется сидя на жесткой прямой поверхности сзади вдоль позвоночника от сидения вверх до естественной линии талии).</td>
            </tr>
            <tr>
                <th>D5 - Дслонки</th>
                <td>- длина слонки (от естественной линии талии до талии по среднему шву вертикально, через нижнюю точку среднего шва).</td>
            </tr>
            <tr>
                <th>B5 - Опояса</th>
                <td>- объем пояса брюк (горизонтально, плотно по фигуре).</td>
            </tr>
            <tr>
                <th>B6 - ОбхБ</th>
                <td>- обхват бедренной части ноги (специальная мерка, в случае большого объема бедра ноги).</td>
            </tr>
            <tr>
                <th>D6 - Длшага</th>
                <td>- длина шага (от нижней точки среднего шва до щиколотки или до нужной длины брюк, в случае мужской мерки).</td>
            </tr>
            <tr>
                <th>D7 - ДлК</th>
                <td>- длина до колена (от естественной линии талии спереди вертикально вниз по центру ноги до середины колена).</td>
            </tr>
            <tr>
                <th>D8 - ДлЩ</th>
                <td>- длина до щиколотки (от естественной линии талии сбоку вертикально до конца щиколотки).</td>
            </tr>
            <tr>
                <th>D9 - ДлИз</th>
                <td>- длина изделия (от естественной линии талии сбоку вертикально до желаемой длины).</td>
            </tr>
            <tr>
                <th>D10 - Дуга</th>
                <td>- контрольная мерка (от основания шеи на плечевом шве по спине вниз вдоль позвоночника по среднему шву и затем через нижнюю точку среднего шва вверх через высокую точку груди и замыкается у основания шеи на плечевом шве в начальной точке замера).</td>
            </tr>
            <tr>
                <th>D11 - Дуга 2</th>
                <td>- контрольная мерка 2 (от седьмого шейного позвонка вдоль позвоночника вниз по среднему шву, через нижнюю точку среднего шва, вперед и вверх по центру до основания шеи).</td>
            </tr>
            <tr>
                <th>D12 - ДлИзП</th>
                <td>- желаемая длина изделия спереди (от плечевого шва через высокую точку груди и через талию до желаемой длины).</td>
            </tr>
            <tr>
                <th>D13 - ДлИзСп</th>
                <td>- желаемая длина изделия сзади (от седьмого шейного позвонка, вдоль позвоночника через талию до желаемой длины).</td>
            </tr>
        </table>
    </div>

</article>


<style>
    .my-btn{
        display: block;
        margin: 0 auto 0 0;
        padding: 15px;
        background-color: #FFF;
        color: #f50000;
        cursor: pointer;
        transition: all 0.3s ease;
        text-align: center;

    }
    .table-default tr td{
        text-align: left;
    }
    .table-default tr th {
        min-width: 150px;
        max-width: none;
        width: auto;
    }
</style>