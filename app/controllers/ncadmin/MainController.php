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

class MainController extends AppadminController
{
	public $user;
	public $model;
	public function __construct($route)
	{
		//$this->model = new AppModel;
		$this->setTitle("Заказы");
		parent::__construct($route);
	}
	public function indexAction()
	{

		$model = new Booking;
		$this->setTitle("Заказы");
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 10;
		$count = $model->count('order_u');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();


		//все заказы
		$contracts = $model->getContracts($start, $perpage);
		//debug($contracts);

		$this->setData(compact('contracts', 'count', 'pagination'));

		//$this->setData(compact(''));
	}
}
