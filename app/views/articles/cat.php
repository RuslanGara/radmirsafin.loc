<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $cat->seo('title', $cat->model->title);
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['articles/index']];
$this->params['breadcrumbs'][] = $cat->model->title;
?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
<h1><?= $cat->seo('h1', $cat->title) ?></h1>
        </div>
    </div>
</div>
<br/>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php if(count($items)) : ?>
                <?php foreach($items as $article) : ?>
                    <div class="row">
                        <div class="col-md-2">
                            <?= Html::img($article->thumb(160, 120)) ?>
                        </div>
                        <div class="col-md-10">
                            <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug]) ?>
                            <p><?= $article->short ?></p>
                            <p>
                                <?php foreach($article->tags as $tag) : ?>
                                    <a href="<?= Url::to(['/articles/cat', 'slug' => $article->cat->slug, 'tag' => $tag]) ?>" class="label label-info"><?= $tag ?></a>
                                <?php endforeach; ?>
                            </p>
                        </div>
                    </div>
                    <br>
                <?php endforeach; ?>
            <?php else : ?>
                <p>Category is empty</p>
            <?php endif; ?>

            <?= $cat->pages() ?>
        </div>
    </div>
<div>