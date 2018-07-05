<?php
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\easyii\modules\page\api\Page;

$page = Page::get('page-contact');

$this->title = $page->seo('title', $page->model->title);

?>
<h1 class="text44"><?= $page->seo('h1', $page->title) ?></h1>


<div class="row">

    <div class="col-md-5 left0">

        <?= $page->text ?>
     <p itemscope="" itemtype="http://schema.org/Organization">
         <span class="text3" itemprop="name"><strong>Сафин Радмир</strong></span></p>
        <p class="text3" itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
            <strong>
                Телефон:
	<span itemprop="telephone">8-937-838-17-32<br></span>
                Email: <span itemprop="email">rad@safinsystems.ru<br></span>
                Skype: </strong><span itemprop="faxNumber"><strong> safiny566</strong></span></p>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-8 left0 ">
        <div class="row text-left otstup3"  >

            <div class="col-lg-12 col-xs-12 left0 "  >
                <a  type="button"  data-toggle="modal" data-target="#myModalform" class="btn buttion1 btn-default btn-lg">Озвучить проблему</a>
            </div>
        </div>
        <div class="modal fade" id="myModalform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                            <span aria-hidden="true">×</span>
                        </button>
                        <div class="modal-title" id="myModalLabel">Бесплатная консультация прямо сейчас!</div>
                    </div>
                    <div class="modal-body text-center">



                        <p><?php if(Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                        <div class="alert-info">Вы забронировали место</div>
                        <?php else : ?>
                        <?= Subscribe::form() ?>
                        <?php endif; ?></p>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

