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
    // выбор услуги на странице пользователя
    public function indexAction()    {
        
        $this->layout = 'default';
        $model = new Serv;
        $vidServices =  $model->getVidServices();
        $grServices = $model->getServicesAll();
        $services = $model->Services();
        $this->setData(compact('vidServices', 'grServices', 'services'));
    }
    public function orderdateAction()
    {
        $this->layout = 'calendar';
        $model = new Serv;

        // $this->setData(compact('vidServices', 'grServices', 'services'));
    }
    public function orderviewAction()
    {
        //$this->layout = 'calendar';
        $this->layout = 'default';
        $model = new Serv;
    }
}
