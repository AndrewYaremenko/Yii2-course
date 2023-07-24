<?php

namespace app\controllers;

use app\controllers\AppController;

class PostController extends AppController
{

    public $layout = 'basic';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionShow()
    {
        $this-> layout = 'main';
        return $this->render('show');
    }
}
