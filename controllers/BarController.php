<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Bar;
class BarController extends Controller 
{
 public function actionIndex()
 {
 	 $bars = Bar::find()->all();	
  	return $this->render("index", ["bars"=> $bars]);
 	}
}
