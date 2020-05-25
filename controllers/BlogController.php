<?php

namespace app\controllers;

use app\models\News;
use yii\web\Controller;

class BlogController extends Controller
{


    public function actionIndex()
    {
        $this->layout = 'blog';
        $news = News::find()->all();


        return $this->render('index', [
            'news' => $news
        ]);
    }

}
