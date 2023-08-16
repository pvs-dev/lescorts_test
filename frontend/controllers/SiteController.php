<?php

namespace frontend\controllers;

use frontend\Components\Data;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

        return $this->render('index',['items' => Data::getData()]);
    }
}
