<?php


use yii\easyii\modules\page\api\Page;

use yii\helpers\Url;
$page = Page::get('individualnoekonsultirovanie');

$this->title = $page->seo('title', $page->model->title);

?>
<article class="fonts3">
    <div class="container-fluid ">
        <div class="container">
            <div class="row">
                <h1 class="text44 text-center"><?= $page->seo('h1', $page->title) ?></h1>
            </div>

            <div class="row">
                <div class="col-md-12"><?= $page->text ?>
                </div>
            </div>

        </div>
    </div>
<article>




