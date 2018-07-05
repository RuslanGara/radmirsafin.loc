<?php
use yii\easyii\modules\article\api\Article;
use yii\helpers\Url;

$this->title = $article->seo('title', $article->model->title);



?>


<div class="container-fluid fonts1 otstup3">
    <div class="container" >
        <div class="row">
            <div class="col-md-12 text-center">
        <h1><?= $article->seo('h1', $article->title) ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-left">
<?= $article->text ?>
                <div id="hypercomments_widget"></div>


                <?php

                $script = <<< JS
    _hcwp = window._hcwp || [];
                    _hcwp.push({widget:"Stream", widget_id: 94754});
                    (function() {
                        if("HC_LOAD_INIT" in window)return;
                        HC_LOAD_INIT = true;
                        var lang = (navigator.language || navigator.systemLanguage || navigator.userLanguage || "en").substr(0, 2).toLowerCase();
                        var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true;
                        hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://w.hypercomments.com/widget/hc/94754/"+lang+"/widget.js";
                        var s = document.getElementsByTagName("script")[0];
                        s.parentNode.insertBefore(hcc, s.nextSibling);
                    })();
       
JS;
                //маркер конца строки, обязательно сразу, без пробелов и табуляции
                $this->registerJs($script, yii\web\View::POS_READY);

                ?>
                < <a href="http://hypercomments.com" rel = "nofollow" class="hc-link" title="comments widget">comments powered by HyperComments</a>

<small class="text-muted">Views: <?= $article->views?></small>
            </div>
        </div>
     </div>
</div>