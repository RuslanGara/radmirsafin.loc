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
    <div><a id='top'></a></div>
    <header>

        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <strong>   <a class="navbar-brand text-left " href="<?= Url::home() ?>"><div class="textlogo">8-937-838-17-32</div><div class="textlogomini"><p>запись на консультацию</p></div></a></strong>

                </div>

                <div class="collapse navbar-collapse text-center" id="navbar-menu">

                    <ul class="nav navbar-nav navbar-right">



                        <li><a href="<?=Url::toRoute('/#colsultacionpsihologa');?>">консультация психолога</a></li>

<!--                        <li class="dropdown">-->
<!--                                                        <a href="#" class="dropdown-toggle" id="dropdownMenu" data-toggle="dropdown" role="button"-->
<!--                                                           aria-expanded="false">виды консультаций<span class="caret"></span></a>-->
<!--                          <!--  <ul class="nav nav-tabs   navbar-example">-->
<!--                                <li><a href="#individcons">ИНДИВИДУАЛЬНЫЕ <p>КОНСУЛЬТАЦИИ</p></a></li>-->
<!--                                <li><a href="#semeinoe">СЕМЕЙНОЕ <p>КОНСУЛЬТИРОВАНИЕ</p></a></li>-->
<!--                                <li><a href="#biznes">КОНСУЛЬТИРОВАНИЕ <p>БИЗНЕСА</p></a></li>-->
<!--                                <li><a href="#skype">Skype <p>КОНСУЛЬТАЦИИ</p></a></li>-->
<!--                            </ul>-->
<!--                                                    </li>-->

                        <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" role="button"
                                                           aria-expanded="false">виды консультаций<span class="caret"></span></a>
                                                        <ul aria-labelledby="dropdownMenu1" class="dropdown-menu" role="menu">

                                                            <li><a href="<?=Url::toRoute('/#individcons');?>">индивидуальные консультации</a></li>
                                                            <li><a href="<?=Url::toRoute('/#semeinoe');?>">семейное консультирование</a></li>
                                                            <li><a href="<?=Url::toRoute('/#biznes');?>">консультирование бизнеса</a></li>
                                                            <li><a href="<?=Url::toRoute('/#skype');?>">Skype консультации</a></li>
                                                        </ul>
                        </li>
                        <li><a onclick="jivo_api.open();">он-лайн консультант</a></li>
                        <li><a href="<?=Url::toRoute('/reviews');?>">отзывы</a></li>
                        <li><a href="<?=Url::toRoute('/articles');?>">статьи</a></li>
                        <li><a href="<?=Url::toRoute('/#kontakti');?>">контакты</a></li>
                    </ul>
<!--                    <a href="https://vk.com/id15562297" target="_blank"> --><?// echo FA::icon(
//                            'vk',
//                            ['class' => 'fa-2x', 'data-role' => 'arrow']
//                        ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?><!--</a>-->
<!---->
<!--                    <a href="https://instagram.com/_u/prosto.o.slozhnom?r=sun1" target="_blank"> --><?// echo FA::icon(
//                            'instagram',
//                            ['class' => 'fa-2x', 'data-role' => 'arrow']
//                        ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?><!--</a>-->
                </div>

            </div>
        </nav>
    </header>
    <main>


        <?php if($this->context->id != 'site') : ?>

            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
        <?php endif; ?>
        <?= $content ?>


    </main>
    <footer class="fonts4">
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                        <div class="row">
                            <div class="col-md-12 text-right text66 otstup1">
                                <p>ПСИХОЛОГ В УФЕ</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right text11">
                                <p>РАДМИР САФИН</p>
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-md-10   text-left text144">
                                <p>8-937-838-17-32</p>
                                <div class="text8888">
                                    <p>Запись на консультацию</p>
                                </div>
                            </div>
                            </div>


                </div>


                <div class="col-md-3 text-right text888 otstup_footer" style="padding-left: 65px;">

                    <ul class="nav nav-pills nav-stacked">
                        <li ><a class="text888" href="#colsultacionpsihologa">консультация психолога</a></li>

                        <li class="dropdown">
                            <a href="#" data-toggle="dropdown"  class="dropdown-toggle text888">виды консультаций<b class="caret"></b></a>
                            <ul  class="dropdown-menu" >

                                <li><a href="<?=Url::toRoute('/#individcons');?>">индивидуальные консультации</a></li>
                                <li><a href="<?=Url::toRoute('/#semeinoe');?>">семейное консультирование</a></li>
                                <li><a href="<?=Url::toRoute('/#biznes');?>">консультирование бизнеса</a></li>
                                <li><a href="<?=Url::toRoute('/#skype');?>">Skype консультации</a></li>

                            </ul>
                        <li><a class="text888" onclick="jivo_api.open()">он-лайн консультант</a></li>
                        </li>
                    </ul>


                </div>
                <div class="col-md-2 otstup2   text-center otstup_footer">
                    <p><a class=" text888" href="<?=Url::toRoute('/reviews');?>">отзывы</a></p>
                    <p><a class=" text888" href="<?=Url::toRoute('/articles');?>">статьи</a></p>
                    <p><a class=" text888" href="<?=Url::toRoute('/#kontakti');?>">контакты</a></p>

                </div>

                <div class="col-md-2 otstup2" style="padding-left:0px">
                            <div class=" text-center">
                                <a href="https://vk.com/id15562297" target="_blank"> <? echo FA::icon(
                                        'vk',
                                        ['class' => 'fa-2x  fa3', 'data-role' => 'arrow']
                                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>

                                <a href="https://instagram.com/_u/prosto.o.slozhnom?r=sun1" target="_blank"> <? echo FA::icon(
                                        'instagram',
                                        ['class' => 'fa-2x  fa3', 'data-role' => 'arrow']
                                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>
                                <a href="https://ru-ru.facebook.com/people/%D0%A0%D0%B0%D0%B4%D0%BC%D0%B8%D1%80-%D0%A1%D0%B0%D1%84%D0%B8%D0%BD/100011408370015" target="_blank"> <? echo FA::icon(
                                        'facebook',
                                        ['class' => 'fa-2x  fa3', 'data-role' => 'arrow']
                                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>
                             </div>
                     </div>
                </div>
                <div class="row otstup_footer1">

                        <div class="col-md-4  otstup_left1 text-left  text888">

                        </div>
                        <div class=" col-md-8"> <div class="text33  text-right" style="padding-right: 70px;"></div>
                        </div>





                </div>
            </div>
    </footer>
</div>

<?php $this->endContent(); ?>
