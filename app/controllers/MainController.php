<?php

/** Главная страница 
 */

namespace app\controllers;

use fw\core\Db;
use fw\core\base\View;
use app\models\Main;

class MainController extends AppController
{
  public function __construct($route)
  {
    parent::__construct($route);
  }

  public function indexAction()
  {
    $this->setTitle('О салоне');
    $model = new Main;
    $vidUslug = $model->getVidUslug();
    $promotions = $model->getPromotion();
    $persons = $model->getPerson();
    $this->setData(compact('vidUslug', 'promotions', 'persons'));
  }
}
