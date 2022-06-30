<?php

/**
 * контроллер админской части  
 */

namespace app\controllers\ncadmin;

use fw\core\Db;
use app\models\ncadmin\Contracts;
use fw\core\base\View;
use fw\libs\Pagination;
use app\models\Booking;
use app\models\User;
use app\models\Customers;
use app\models\Serv;


class PersonController extends AppadminController
{

	public $model;
	public function __construct($route)
	{
		$this->model = new Customers;

		parent::__construct($route);
	}
	public function indexAction()
	{
		$model = new Customers;

		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 10;
		$count = $model->count('persons');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();


		$persons = $model->getPesonals($start, $perpage);
		$personsServ = $model->getPersonSevices();

		$serv = new Serv;
		$grservices = $serv->getGrupServicesAll();
		$this->setTitle("Мастера");
		$this->setData(compact('count', 'persons', 'personsServ', 'grservices', 'pagination'));
	}

	//просмотр договора
	public function viewAction()
	{
		$contract_id = $this->getRequestID();

		$model = new Booking;

		$contract = [];
		$devices = [];
		//$contract = $model->getRowContracts($contract_id);
		$contract = $model->getContractSql($contract_id);
		//debug($contract_id);
		//debug($contract);
		if (!$contract) {
			throw new \Exception('Страница не найдена', 404);
		} else {
			$lists = $model->getDetal($contract_id);
		}
		//	debug($lists, true);

		$this->setData(compact('contract', 'lists'));
	}
}
