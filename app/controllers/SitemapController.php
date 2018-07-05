<?php
/**
 * Created by PhpStorm.
 * User: MPK
 * Date: 06.12.2017
 * Time: 18:22
 */
namespace app\controllers;


use Yii;
use yii\web\Controller;
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\news\api\News;

class SitemapController extends \yii\web\Controller
{

    public function actionIndex()
    {
        if (!$xml_sitemap = Yii::$app->cache->get('sitemap')) {  // проверяем есть ли закэшированная версия sitemap
            $urls = array();

            // Выбираем категории сайта
            $cat = Article::cat(articles);
            foreach ($cat->items() as $categ) {

                $urls[] = array(
                    Yii::$app->urlManager->createUrl(['/articles/view/' . $categ->slug ]) // создаем ссылки на выбранные категории
                , 'daily'                                                           // вероятная частота изменения категории
                );
            };

            $news = News::items([]);
            foreach ($news as $newss) {
                $urls[] = array(
                    Yii::$app->urlManager->createUrl(['/reviews/view/' . $newss->slug ]) // создаем ссылки на выбранные категории
                , 'daily'                                                           // вероятная частота изменения категории
                );
            };

          $xml_sitemap = $this->renderPartial('index', array( // записываем view на переменную для последующего кэширования
               'host' => Yii::$app->request->hostInfo,         // текущий домен сайта
                'urls' => $urls,                                // с генерированные ссылки для sitemap
           ));

            Yii::$app->cache->set('sitemap', $xml_sitemap, 3600*12); // кэшируем результат, чтобы не нагружать сервер и не выполнять код при каждом запросе карты сайта.
        }

      header('Content-Type: application/xml'); // тоже самое, формат отдачи контента

       echo $xml_sitemap;
    }
}