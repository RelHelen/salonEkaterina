<?php

/** Главная страница 
 */

namespace app\controllers;

use fw\core\Db;
use fw\core\base\View;
use app\models\Serv;

class BronorderController extends AppController
{

    public function __construct($route)
    {
        parent::__construct($route);
        //debug($route);
    }
    public function indexAction()
    {
        $this->layout = 'calendar';
        $model = new Serv;

        // $this->setData(compact('vidServices', 'grServices', 'services'));
    }
    public function viewAction()
    {
        $this->layout = 'calendar';
        $model = new Serv;
    }
}
