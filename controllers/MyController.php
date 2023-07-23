<?php

namespace app\controllers;

use app\controllers\AppController;

class MyController extends AppController
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
