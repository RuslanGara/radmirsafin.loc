<?php
use yii\easyii\modules\news\api\News;
use yii\helpers\Url;

$this->title = $news->seo('title', $news->model->title);

?>

<div class="container ">
    <div class="row">

<?= $news->text ?>


<p>
    <?php foreach($news->tags as $tag) : ?>
        <a href="<?= Url::to(['/news', 'tag' => $tag]) ?>" class="label label-info"><?= $tag ?></a>



    <?php endforeach; ?>
</p>

<div class="small-muted ">Просмотров: <?= $news->views?></div>
    </div>
</div>