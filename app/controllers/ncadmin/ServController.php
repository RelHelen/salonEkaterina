<?php

/**
 * контроллер админской части  
 */

namespace app\controllers\ncadmin;

use fw\core\Db;
use app\models\AppModel;
use app\models\Booking;
use app\models\Serv;
use fw\core\base\View;
use fw\libs\Pagination;

class  ServController extends AppadminController
{
	public $user;
	public $model;
	public function __construct($route)
	{

		$this->setTitle("Услуги");
		parent::__construct($route);
	}
	public function indexAction()
	{

		$model = new Serv;

		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 5;
		$count = $model->count('uslugi');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();

		$services = $model->getServicesPag($start, $perpage);
		$vidservices = $model->getVidServices();

		$grservices = $model->getGrupServicesAll();
		//debug($grservices);
		$this->setTitle("Услуги");
		$this->setData(compact('services', 'count', 'pagination', 'vidservices', 'grservices'));

		//$this->setData(compact(''));
	}
}
