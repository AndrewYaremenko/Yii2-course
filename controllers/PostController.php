<?php

namespace app\controllers;

use app\controllers\AppController;
use Yii;

class PostController extends AppController
{
    public function actionIndex()
    {

        $names = ['Jhon', 'Bob', 'Andrew'];

        debug([123,23,true]);

        return $this->render('index');
    }
}
