<?php
use yii\helpers\Html;
$asset = \app\assets\AppAsset::register($this);

//$script = <<< JS
//(function(){ var widget_id = 'J2RqiSgEjp';var d=document;var w=window;function l(){
//var s = document.createElement('script');
//s.type = 'text/javascript';
//s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0];
//ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();
//}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
//
//
//JS;
//$this->registerJs($script, yii\web\View::POS_BEGIN);
//
//$script = <<< JS
//$("#jivo-iframe-container").attr("style", "height: 481px !important;");
//JS;
//$this->registerJs($script, yii\web\View::POS_READY);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>

        <meta name="yandex-verification" content="f9bb9b55e43c38af" />
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Индивидуальная и семейная консультация психолога в Уфе. Очно и по skype">
        <meta name="Keywords" content="Курсы менеджмент">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<!--        <script src="//st.yagla.ru/js/y.c.js?h=c8218dc07caeaee6b83a49c06dd19d88"></script>-->
<!--        <link rel="stylesheet" href="https://cdn.callbackkiller.com/widget/cbk.css">-->
<!--        <script type="text/javascript" src="https://cdn.callbackkiller.com/widget/cbk.js?cbk_code=2a80e1d43c597f9d69d1f82558e627e5" charset="UTF-8" async></script>-->
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?= $content ?>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>