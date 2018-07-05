<?php

use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use yii\helpers\Url;
$page = Page::get('page-articles');

$this->title = $page->seo('title', $page->model->title);

?>




<div class="container-fluid fonts222">
<div class="container">
    <div class="row ">
        <div class="col-md-12 ">
            <?php if(count($items)) : ?>
            <?php foreach($items as $article) :
                ?>
            <div class="row">
                <div class="col-md-12  text-center ">

                    <?= Html::tag('a', Html::encode(''), ['ID'=>$yakorssilka=$yakorssilka+1]) ?>
                </div>
            </div>

                    <div class="row ">
                        <div class="col-md-12 text-center ">
                            <h2><?= $article->title ?></h2>

                        </div>
                    </div>
                <div class="row ">
                <div class="col-md-2 ">
                    <?= Html::img($article->thumb(120, 120)) ?>
                </div>
                <div class="col-md-10 ">
<!--                    <p> --><?//= $article->short ?><!--</p>-->

                    <p> <?= \yii\helpers\StringHelper::truncate( $article->short ,700,'...'); ?></p>

                    <div class="otstup1">
                        <?= Html::button(Html::a('Читать', ['articles/view', 'slug' => $article->slug]), ['class' => 'btn btn-primaryblue']) ?>
                    </div>
                </div>

            </div>
                    <div class="row">
                        <div class="col-md-12  ">
<!--                            <ul class="nav nav-tabs  text4 text-center otstup85 ">-->
<!---->
<!---->
<!--                                <li> --><?//= Html::a(Html::img('@web/uploads/lagoutsnew/strelka_6.png'), ['articles/view', 'slug' => $article->slug]) ?><!--</li>-->
<!---->
<!--                            </ul>-->

                        </div>


                    </div>
                <div class="row">
                    <div class="col-md-12  text-center otstup65botoom">

                    </div>


                </div>
                <?php endforeach; ?>

        </div>
    </div>


    <?php else : ?>
        <p>Category is empty</p>
    <?php endif; ?>

    <?= $cat->pages() ?>

    </div>

    </div>
