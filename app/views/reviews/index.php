<?php
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
use yii\helpers\Url;

$page = Page::get('page-news');

$this->title = $page->seo('title', $page->model->title);

?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center otstup3">
        <h1><?= $page->seo('h1', $page->title) ?></h1>
        </div>
    </div>

<?php foreach($news as $item) : ?>
    <div class="row otstup3">
        <div class="col-md-2">
            <?= Html::img($item->thumb(160, 160)) ?>
        </div>
        <div class="col-md-10">
            <p> <?= $item->title ?></p>
            <div class="small-muted"><?= $item->date ?></div>
            <p><?= $item->short ?></p>
            <p>
                <?php foreach($item->tags as $tag) : ?>
                    <a href="<?= Url::to(['/reviews', 'tag' => $tag]) ?>" class="label label-info"><?= $tag ?></a>
                <?php endforeach; ?>
            </p>
            <div class="otstup1">
                <?= Html::button(Html::a('Читать', ['reviews/view', 'slug' => $item->slug]), ['class' => 'btn btn-primaryblue']) ?>
            </div>
        </div>
    </div>
    <br>
<?php endforeach; ?>

<?= News::pages() ?>
</div>