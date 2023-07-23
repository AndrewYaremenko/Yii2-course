<?php

namespace app\controllers;

class MyController extends \yii\web\Controller
{
    public function actionIndex($id = null)
    {
        $hi = "Hello world!";
        $names = ['Jhon', 'Bob', 'Andrew'];
        return $this->render('index', [
            'hello' => $hi,
            'nicknames' => $names,
            'id' => $id,
        ]);
        // return $this->render('index', compact('hi', 'names'));
    }

}
