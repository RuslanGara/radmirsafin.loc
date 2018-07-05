<?php
use rmrevin\yii\fontawesome\FA;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;
use yii\helpers\Html;
use yii\easyii\modules\text\api\Text;
use yii\easyii\modules\file\api\File;



$script = <<< JS
  $(document).ready(function(){
  //Инициализация всплывающей панели для
  //элементов веб-страницы, имеющих атрибут
  //data-toggle="popover"
  $('[data-toggle="kontakti"]').popover({
    //Установление направления отображения popover
    placement : 'bottom'
  });
});
JS;
$this->registerJs($script, yii\web\View::POS_END);
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>
<div id="wrapper" class="container-fluid bg2">
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="logoimg" href="<?= Url::home() ?>">  <?= Html::img('@web/uploads/lagoutssys/unnamed.png', ['alt' => 'Наш логотип','heght'=>'65','width'=>'65']) ?></a>
                    <strong>   <a class="navbar-brand text-center textlogo" href="<?= Url::home() ?>">RADMIRSAFIN</a></strong>

                </div>

                <div class="collapse navbar-collapse text-center" id="navbar-menu">

                    <ul class="nav navbar-nav navbar-left">

                        <li><a href="<?=Url::toRoute('/obomne');?>\">Обо мне</a></li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" role="button"
                               aria-expanded="false">СО-Проекты<span class="caret"></span></a>
                            <ul aria-labelledby="dropdownMenu1" class="dropdown-menu" role="menu">
                                <li><a href="http://prostomanagement.ru/" target="_blank">ProstoManagement</a></li>
                                <li><a href="http://lifeprosto.ru/" target="_blank">ProstoLife</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" role="button"

                               aria-expanded="false">Услуги<span class="caret"></span></a>
                            <ul aria-labelledby="dropdownMenu2" class="dropdown-menu" role="menu">
                                <li><a href="<?=File::gety('delovoe')?>" target="_blank">Деловое сопровождение</a></li>
                                <li><a href="<?=File::gety('kouching')?>" target="_blank">Коучинг</a></li>
                                <li><a href="<?=File::gety('mediacia')?>" target="_blank">Медиация</a></li>
                                <li><a href="<?=File::gety('konsultirov')?>"  target="_blank">Психологическое консультирование</a></li>

                            </ul>


                        </li>
                        <li><a href="<?=Url::toRoute('/contact');?>\">Контакты</a></li>

                    </ul>
                    <a href="https://vk.com/id15562297" target="_blank"> <? echo FA::icon(
                            'vk',
                            ['class' => 'fa-2x', 'data-role' => 'arrow']
                        ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>

                    <a href="https://instagram.com/_u/prosto.o.slozhnom?r=sun1" target="_blank"> <? echo FA::icon(
                            'instagram',
                            ['class' => 'fa-2x', 'data-role' => 'arrow']
                        ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>
                </div>

            </div>
        </nav>
    </header>
    <main>

        <br/>
        <?php if($this->context->id != 'site') : ?>
            <br/>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        <?php endif; ?>

        <?= $content ?>

        <div class="push"></div>
    </main>
</div>

<?php $this->endContent(); ?>
