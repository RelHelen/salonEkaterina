<?php

/** Главная страница 
 */

namespace app\controllers;

use fw\core\Db;
use fw\core\base\View;
use app\models\Serv;

class ServController extends AppController
{

    public function __construct($route)
    {
        parent::__construct($route);
        // debug($route);
    }

    public function indexAction()
    {
        // $this->setTitle('Главная страница'); //установка заголовка
        $this->layout = 'default';
        $model = new Serv;
        $services = $model->getServicesAll();

        $this->setData(compact('services'));
    }
}
