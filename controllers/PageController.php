<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class PageController extends Controller
{
    public function actionListproduct()
    {
        $this->layout = 'default';
        return $this->render('listproducts');
    }

    public function actionItem1()
    {
        $this->layout = 'bitem1';
        return $this->render('item1');
    }

    public function actionItem2()
    {
        $this->layout = 'bitem2';
        return $this->render('item2');
    }

    public function actionItem3()
    {
        $this->layout = 'bitem3';
        return $this->render('item3');
    }

    public function actionItem4()
    {
        $this->layout = 'bitem4';
        return $this->render('item4');
    }

    public function actionItem5()
    {
        $this->layout = 'bitem5';
        return $this->render('item5');
    }

    public function actionItem6()
    {
        $this->layout = 'bitem6';
        return $this->render('item6');
    }
}
