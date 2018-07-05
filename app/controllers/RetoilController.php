<?php
namespace app\controllers;

use yii\easyii\modules\otzivi\api\File;

class RetoilController extends \yii\web\controller
{
    public function actionIndex($tag = null)
    {
        return $this->render('index',[
            'news' => File::items(['tags' => $tag, 'pagination' => ['pageSize' => 10]])
        ]);
    }
}