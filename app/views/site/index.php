<?php
use yii\easyii\modules\subscribe\api\Subscribe;
use rmrevin\yii\fontawesome\FA;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;
use yii\helpers\URL;
use yii\easyii\modules\file\api\File;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
?>
<!-- Yandex.Metrika counter -->
<?php

$script = <<< JS
     (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42463289 = new Ya.Metrika({
                    id:42463289,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
JS;
$this->registerJs($script, yii\web\View::POS_END);?>
<noscript><div><img src="https://mc.yandex.ru/watch/42463289" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<div class="modal fade" id="myModalBox">    <!-- /.модальное окно -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body ">
               <p>Здравствуйте, я психолог Радмир Сафин, чем я могу Вам помочь?</p>

                <p>Вы можете оставить свой вопрос в форме ниже. Я отвечу Вам в ближайшее время</p>
                <p>Также Вы можете получить бесплатную консультацию позвонив мне или написав в WhatsApp по телефону 8-937-838-17-32.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center otstup6  ">
                         </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="jivo-btn jivo-online-btn jivo-btn-light" onclick="jivo_api.open();" style="font-family: Arial, Arial;font-size: 16px;background-color: #00BCD4;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;height: 30px;line-height: 30px;padding: 0 15px 0 15px;font-weight: normal;font-style: normal"><div data-dismiss="modal" class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/chat_light.png);"></div>Напишите нам, мы в онлайне!</div><div data-dismiss="modal" class="jivo-btn jivo-offline-btn jivo-btn-light" onclick="jivo_api.open();" style="font-family: Arial, Arial;font-size: 16px;background-color: #00BCD4;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;height: 30px;line-height: 30px;padding: 0 15px 0 15px;display: none;font-weight: normal;font-style: normal"><div class="jivo-btn-icon" style="background-image: url(//static.jivosite.com/button/mail_light.png);"></div>Оставьте сообщение!</div>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>

            </div>
        </div><!-- /.модальное окно-Содержание -->
    </div><!-- /.модальное окно-диалог -->
</div><!-- /.модальное окно -->






<!--    Мини шапка-->
    <article>
<div class="container-fluid fonts1 otstup3">
    <div class="container" >
        <div class="row">

            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="korob1 ">
                        <div class="text1">
                            <?= Text::get('newzagolovok1') ?>
                        </div>
                        <div class="text66 text-right">
                           <h1 class="margin0">  <small class="textzagolovok1"><?= Text::get('newzagolovok2') ?></small></h1>
                        </div>

                    </div>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 hidden-xs"></div>
            <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 hidden-xs"> </div>
            <div class="col-lg-2  col-md-2 col-sm-3 col-xs-12 text-left">
                <div class="otstup1 ">
                <a href="https://vk.com/id15562297" target="_blank"> <? echo FA::icon(
                        'vk',
                        ['class' => 'fa-2x fa1', 'data-role' => 'arrow']
                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>

                <a href="https://instagram.com/_u/prosto.o.slozhnom?r=sun1" target="_blank"> <? echo FA::icon(
                        'instagram',
                        ['class' => 'fa-2x fa1', 'data-role' => 'arrow']
                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>
                <a href="https://ru-ru.facebook.com/people/%D0%A0%D0%B0%D0%B4%D0%BC%D0%B8%D1%80-%D0%A1%D0%B0%D1%84%D0%B8%D0%BD/100011408370015" target="_blank"> <? echo FA::icon(
                        'facebook',
                        ['class' => 'fa-2x fa1', 'data-role' => 'arrow']
                    ); // <i class="big fa fa-arrow-left" data-role="arrow"></i> ?></a>
            </div>
            </div>


        </div>

    </div>
</div>
    </article>

<!--    заголовок и первый слайд-->
    <article>
<div class="container-fluid black1">
<div class="container" >



    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12"  >

        <!-- Навигационное меню -->
            <ul class="nav nav-tabs otstup1 text4 navbar-example">
                <li><a href="#individcons">ИНДИВИДУАЛЬНЫЕ <p>КОНСУЛЬТАЦИИ</p></a></li>
                <li class="otstup_left" ><a href="#semeinoe">СЕМЕЙНОЕ <p>КОНСУЛЬТИРОВАНИЕ</p></a></li>
                <li class="otstup_left"><a href="#biznes">КОНСУЛЬТИРОВАНИЕ <p>БИЗНЕСА</p></a></li>
            </ul>


            <!-- Навигационное меню -->
        </div>
    </div>





    <div class="row">
        <div class="col-lg-7 col-xs-12 "  >
           <div class="content-bg text5"><p> ВМЕСТЕ <br> МЫ ПРЕОДОЛЕЕМ <br>ТРУДНОСТИ</p></div>
        </div>
    </div>
    <!--кнопка модально окна открыто-->
    <div class="row text-left "  >

        <div class="col-lg-8 col-xs-12 otstup3  "  >

            <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn1 btn-default1 btn-lg1">ОСТАВИТЬ ЗАЯВКУ</a>
        </div>

    </div>
    <!--кнопка модально окна закрыто-->


    <div class="row ">

        <div class="col-lg-7 col-xs-12 "  >
            <div class="text6 text-center">
                <p><?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                <div class="alert alert-info infoservice">мы свяжемся с Вами в самое ближайшее время</div>
                <?php endif; ?></p>
            </div>
        </div>
    </div>
    <div class="row ">

        <div class="col-lg-7 col-xs-12 "  >
            <div class="text6 text-center">заявка Вас ни к чему не обязывает</div>
        </div>
    </div>
    </article>
    <!--    заголовок и первый слайд конец-->



            <div class="clearfix"></div>
    <div class="row text-left">

    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">×</span>
                    </button>

                </div>
                <div class="modal-body text-center">



                                <p><?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                                <div class="alert-info">Вы забронировали место</div>
                                <?php else : ?>
                                <?= Subscribe::form() ?>
                                <?php endif; ?></p>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default " data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Модальное окно конец -->


<div data-spy="scroll" data-target="#navbar-example">
    <!--    второй слайд-->
<div class="container-fluid text-center black2  " >
    <div class="container">
        <div class="row text-center  otstup4">
            <div class="col-lg-12 col-lg-offset-2 " id="blackfinish" style="display: none">
                <?= Html::img('@web/uploads/lagoutsnew/text_fon_blok_2.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>
            </div>
            <div id="closeback">
                <div class="col-lg-12 col-lg-offset-2 " id="black1" style="display: none">
                    <?= Html::img('@web/uploads/lagoutsnew/fraza1.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>

                </div>
                <div class="col-lg-12 col-lg-offset-2 " id="black2" style="display: none">
                    <?= Html::img('@web/uploads/lagoutsnew/fraza2.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>

                </div>
                <div class="col-lg-12 col-lg-offset-2 " id="black3" style="display: none">
                    <?= Html::img('@web/uploads/lagoutsnew/fraza3.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>

                </div>
                <div class="col-lg-12 col-lg-offset-2 " id="black4" style="display: none">
                    <?= Html::img('@web/uploads/lagoutsnew/fraza4.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>

                </div>
                <div class="col-lg-12 col-lg-offset-2 " id="black5" style="display: none">
                    <?= Html::img('@web/uploads/lagoutsnew/fraza5.png', ['alt' => 'Наш логотип','class'=>'img-responsive']) ?>

                </div>
            </div>
        </div>
    </div>
</div>
    <!--    второй слайд конец-->

    <!--    третий слайд-->
    <article class="fonts23">
<div class="container-fluid" >
    <div class="container">
        <div class="row otstup3">
            <div class="col-lg-12 ">
                <H2 class="text-center text55">В РЕЗУЛЬТАТЕ НАШЕЙ РАБОТЫ<br>ВЫ СМОЖЕТЕ</H2>

            </div>
            <div class="clearfix"></div>
            <div class="container ">
                <div class="row row-margin-bottom otstup6">
                    <div class="col-md-4 ">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/1.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Улучшить <br> качество вашей <br> жизни</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/2.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Перестать испытывать <br>волнение и <br>беспокойство</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/3.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Успокоиться и<br> стабилизировать <br>свою жизнь</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/4.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Повысить<br> свою <br>самооценку</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/5.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Увидеть свое<br> свободное<br> время</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/6.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Улучшить отношения с <br>близкими, партнерами по <br>бизнесу и самим собой</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/7.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Повысить свою <br>работоспособность и <br> устойчивость к внешним факторам</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/8.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>Почувствовать<br>удовольствие и радость<br>от своих действий</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2">
                                    <?= Html::img('@web/uploads/lagoutsnew/9.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                    <div class="lib-row lib-desc">
                                        <p>научиться эффективно <br> взаимодействовать с <br> внешними факторами</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <div class="col-md-4 col-md-offset-4 otstup3">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-2 col-md-offset-3">
                                    <?= Html::img('@web/uploads/lagoutsnew/10.png', ['class' => 'lib-img-show']) ?>

                                </div>
                                <div class="col-md-10">

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="row otstup_footer1" >
            <div class="col-lg-12 ">
                <H6 class="text-center text88   ">РАСКРЫТЬ НОВУЮ РЕАЛЬНОСТЬ СВОЕЙ ЖИЗНИ</H6>
            </div>
        </div>

    </div>
</div>
        </article>
    <!--    третий слайд конец-->
    <!--    4-ый слайд-->
    <article class="fonts3">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 otstup5 text11">
                        <p>
                            <a id="colsultacionpsihologa"></a>
                            КОНСУЛЬТИРОВАНИЕ<br>ПСИХОЛОГА
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 otstup1 text9 otstup_footer1">

                        <div id="mydiv">
                            <?=
                            Text::get('konsultacion');
                            ?>
                        </div>
                    </div>
                </div>
<!--                <div class="row">-->
<!--                    <div class="col-md-12 otstup5 text-center otstup_footer1 ">-->
<!---->
<!--                      <a  onclick="viewdiv('mydiv');">   --><?//= Html::img('@web/uploads/lagoutsnew/stelka_4.png') ?><!--</a>-->
<!--                    </div>-->
<!--                </div>-->

            </div>
            </div>

    </article>
    <!--    4-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->

    <!--    5-ый слайд-->
    <article class="black5">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right  otstup5 text1" >
                        <p >
                            <a id="individcons"></a>
                            ИНДИВИДУАЛЬНОЕ<br>КОНСУЛЬТИРОВАНИЕ
                        </p>
                    </div>
                </div>


                <div class="row otstup6 otstup_footer1">
                    <div class="col-md-12 text-right text7 ">

                        <?=
                        Text::get('individ');
                        ?>
                    </div>
                </div>

<!--                <div class="row">-->
<!--                    <div class="col-md-12 otstup8 text-center ">-->
<!--                        <a href="--><?//= Url::toRoute(['/individualnoekonsultirovanie']); ?><!--">--><?//= Html::img('@web/uploads/lagoutsnew/stelka_4.png') ?><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

    </article>
    <!--    5-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->


    <!--    6-ый слайд-->
    <article class="black6">
        <div class="container-fluid otstup_footer1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-left otstup5 text1">
                        <a id="semeinoe"></a>

                        <p>
                            СЕМЕЙНОЕ<br>КОНСУЛЬТИРОВАНИЕ
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12 text-left text7">
                        <?=
                        Text::get('semeynoye-konsultirovaniye');
                        ?>

                    </div>
                </div>

<!--                <div class="row">-->
<!--                    <div class="col-md-12 otstup7 text-center ">-->
<!--                        <a href="#biznes">--><?//= Html::img('@web/uploads/lagoutsnew/strelka_6.png') ?><!--</a>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </div>

    </article>
    <!--    6-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->


    <!--    7-ый слайд-->
    <article class="black7">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-right otstup5 text1">
                        <a id="biznes"></a>
                        <p>
                            КОНСУЛЬТИРОВАНИЕ<br> БИЗНЕСА
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12 text-right text7">
                        <?=
                        Text::get('konsultrovaniye-biznesa');
                        ?>

                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    7-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->

    <!--    8-ый слайд-->
    <article class="black8">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-left otstup5 text1">
                        <a id="kak_ponyat"></a>
                        <p>
                            КАК ПОНЯТЬ, ЧТО ВАМ НУЖНА<br>КОНСУЛЬТАЦИЯ ПСИХОЛОГА
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12 text-left text7">
                        <?=
                        Text::get('kak-ponyat-chto-nuzhna-pomoshch');
                        ?>

                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    8-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->

    <!--    9-ый слайд-->
    <article class="fonts23">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-right otstup5 text1">
                        <a id="predvoritelnaya"></a>
                        <p>
                            ПРЕДВАРИТЕЛЬНАЯ<br> КОНСУЛЬТАЦИЯ ПСИХОЛОГА
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12 text-right text7">
                        <?=
                        Text::get('predvaritelnaya-konsultatsiya-psikhologa');
                        ?>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    9-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->
    <!--    10-ый слайд-->
    <article class="black10">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-left otstup5 text1">
                        <a id="skype"></a>
                        <p>
                           SKYPE-<br>КОНСУЛЬТАЦИИ
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12  text7">
                        <?=
                        Text::get('konsultirovaniye-po-skayp');
                        ?>


                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    10 -ый слайд конец-->
    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->

    <!--    11-ый слайд-->
    <article class="black11 ">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-right otstup5 text11">
                        <a id="programma"></a>
                        <p>
                            ПРОГРАММА<br> КОМПЛЕКСНОГО ЭМОЦИОНАЛЬНОГО <BR> И ИНТЕЛЛЕКТУАЛЬНОГО<br> СОПРОВОЖДЕНИЯ &lt;&lt;ПРЕМИУМ&gt;&gt;
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12  text777">
                        <?=
                        Text::get('programma-kompleksnogo-emotsional-nogo-i-intellektual-nogo-soprovozhdeniya');
                        ?>

                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    11-ый слайд конец-->

    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->


    <!--    12-ый слайд БАР-->
    <article class="fonts2  ">
        <div class="container-fluid">
            <div class="container otstup_footer1">
                <div class="row">
                    <div class="col-md-12 text-center otstup5 text1">
                        <a id="otzovi"></a>
                        <p>
                            ОТЗЫВЫ
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-12 text-center text999">

                        <?= Carousel::widget(1200, 250) ?>
                    </div>
                </div>

                <div class="row hidden-xs">
                    <div class="col-md-12  text-center otstup7 text7">
                      <p><strong>Если Вы тоже хотите оставить отзыв, то присылайте его на почту rad@safinsystems.ru</strong></p>
                      <p><strong>и он обязательно будет размещен. По желанию клиента имя и фамилия могут быть изменены</strong></p>
                    </div>
                </div>
            </div>
        </div>

    </article>
    <!--    12-ый слайд БАР конец-->
    <div class="clearfix visible-xs-block"></div>
    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->

    <!--    13-ый слайд-->
    <article class="fonts22">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center otstup5 text1">
                        <p>
                            <a id="kontakti"></a>
                            КОНТАКТЫ
                        </p>
                    </div>
                </div>


                <div class="row otstup6">
                    <div class="col-md-5 col-md-push-1 text-center text4">
                        <p>Консультация проводится только по</p>
                        <p>предварительной записи</p>
                        <p>Если на Ваш звонок не ответили</p>
                        <p>отправьте СМС</p>
                        <p>с текстом "запрос на консультацию"</p>
                        <p>на номер 8-937-838-17-32 и мы Вам</p>
                        <p>обязательно перезвоним!</p>
                    </div>

                    <div class="col-md-5 col-md-push-1 text-center text444">
                        <p>Телефон 8-937-838-17-32</p>
                        <p>email: rad@safinsystems.ru</p>
                        <p>Skype: miradnel</p>


                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    13-ый слайд конец-->
    <!--    форма откправки -ый слайд-->
    <article class="formotvet">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center otstup5 text4">
                        <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn2 btn-default2 btn-lg2">ЗАПИСАТЬСЯ НА КОНСУЛЬТАЦИЮ</a>
                    </div>
                    <div class="col-md-6  text-center otstup5 text4">
                        <a onclick="jivo_api.open();" type="button" class="btn2 btn-default2 btn-lg2">ОНЛАЙН КОНСУЛЬТАНТ</a>
                    </div>
                </div>
                <div class="row ">

                    <div class="col-md-12 col-xs-12 "  >
                        <div class="text66 otstup6 text-center">Запись на консультацию Вас ни к чему не обязывает</div>
                    </div>
                </div>


            </div>
        </div>

    </article>
    <!--    форма отправки конец-->
</div>

<a type="button" href="#top"  class="idTop btn btn-primary hidden-xs">Наверх</a>
