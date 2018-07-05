<?php
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\easyii\modules\page\api\Page;
use yii\helpers\Html;
$page = Page::get('page-delovoespr');

$this->title = $page->seo('title', $page->model->title);

?>
<h1 class="text44"><?= $page->seo('h1', $page->title) ?></h1>


<div class="row">
    <div class="col-md-12 text3">
        <?= $page->text ?>
    </div>
</div>
