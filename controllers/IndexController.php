<?php

namespace app\controllers;

class IndexController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTreeview()
    {
        return $this->render('treeview');
    }

    public function actionTreeviewinput()
    {
        return $this->render('treeviewinput');
    }

}
