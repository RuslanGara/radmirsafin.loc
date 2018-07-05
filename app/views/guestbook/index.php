<?php
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\page\api\Page;
use yii2mod\comments\models;
$page = Page::get('page-guestbook');

$this->title = $page->seo('title', $page->model->title);

?>
<h1><?= $page->seo('h1', $page->title) ?></h1>

<!--<div class="row">-->
<!--    <div class="col-md-8">-->
<!--        <br>-->
<!--        --><?php //foreach(Guestbook::items(['pagination' => ['pageSize' => 10]]) as $item) : ?>
<!--            <div class="guestbook-item">-->
<!--                <b>--><?//= $item->name ?><!--</b>-->
<!--                <small class="text-muted">--><?//= $item->date ?><!--</small>-->
<!--                <p>--><?//= $item->text ?><!--</p>-->
<!--                --><?php //if($item->answer) : ?>
<!--                    <blockquote>-->
<!--                        <b>Administrator</b><br>-->
<!--                        --><?//= $item->answer?>
<!--                    </blockquote>-->
<!--                --><?php //endif; ?>
<!--            </div>-->
<!--            <br>-->
<!--        --><?php //endforeach; ?>
<!--    </div>-->
<!--    <div class="col-md-4">-->
<!--        --><?php //if(Yii::$app->request->get(Guestbook::SENT_VAR)) : ?>
<!--            <h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Message successfully added</h4>-->
<!--        --><?php //else : ?>
<!--            <h4>Leave message</h4>-->
<!--            <div class="well well-sm">-->
<!--                --><?//= Guestbook::form() ?>
<!--            </div>-->
<!--        --><?php //endif; ?>
<!--    </div>-->
<!--</div>-->

<div class="row text-center">
    <div class="col-md-8">
        <div id="kament_comments"></div>
<?php

$script = <<< JS
	/* * * НАСТРОЙКА * * */
	var kament_subdomain = 'radmirsafin';

	/* * * НЕ МЕНЯЙТЕ НИЧЕГО НИЖЕ ЭТОЙ СТРОКИ * * */
	(function() {
		var node = document.createElement('script'); node.type = 'text/javascript'; node.async = true;
		node.src = 'http://' + kament_subdomain + '.svkament.ru/js/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(node);
	})();



JS;
$this->registerJs($script, yii\web\View::POS_END);

        ?>


        <?php

        echo \yii2mod\comments\widgets\Comment::widget([
            'model' => $model,
        ]); ?>

    </div>
</div>

<?= Guestbook::pages() ?>
