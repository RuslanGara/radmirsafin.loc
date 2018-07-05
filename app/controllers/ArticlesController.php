<?php

namespace app\controllers;

use yii\easyii\modules\article\api\Article;

class ArticlesController extends \yii\web\Controller
{
    public $yakor;
    public function actionIndex()
    {
         $yakor=1;
         $yakorssilka=0;
        $cat = Article::cat(articles);
        if(!$cat){
            throw new \yii\web\NotFoundHttpException('Article category not found.');
        }

        return $this->render('index', [
            'cat' => $cat,
            'yakor' => $yakor,
            'yakorssilka' => $yakorssilka,
            'items' => $cat->items(['tags' => $tag, 'pagination' => ['pageSize' => 10]])
        ]);
    }
    public function actionCat($slug, $tag = null)
    {
        $cat = Article::cat($slug);
        if(!$cat){
            throw new \yii\web\NotFoundHttpException('Article category not found.');
        }

        return $this->render('cat', [
            'cat' => $cat,
            'items' => $cat->items(['tags' => $tag, 'pagination' => ['pageSize' => 10]])
        ]);
    }

    public function actionView($slug)
    {
        $article = Article::get($slug);
        if(!$article){
            throw new \yii\web\NotFoundHttpException('Article not found.');
        }

        return $this->render('view', [
            'article' => $article
        ]);
    }

}
