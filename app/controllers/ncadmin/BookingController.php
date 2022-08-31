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
use app\models\Customers;
use app\models\Serv;


class BookingController extends AppadminController
{

	public $model;
	public function __construct($route)
	{
		$this->model = new Booking;

		parent::__construct($route);
		$this->setTitle("Заказы");
	}
	public function indexAction()
	{
		$model = new Booking;
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 10;
		$count = $model->count('order_u');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();

		//все заказы
		$contracts = $model->getContracts($start, $perpage);

		// $this->setTitle('Список договоров');
		$this->setData(compact('count', 'contracts', 'pagination'));
	}

	//просмотр заказов
	public function viewAction()
	{
		$contract_id = $this->getRequestID();
		$model = new Booking;
		$contract = [];
		$devices = [];
		//$contract = $model->getRowContracts($contract_id);
		$contract = $model->getContractSql($contract_id);
		$_SESSION['contract'] = $contract;
		$model->contract = $contract;
		// debug($contract_id);
		//debug($contract);
		if (!$contract) {
			throw new \Exception('Страница не найдена', 404);
		} else {
			$lists = $model->getDetal($contract_id);
			$model->uslugi = $lists;
		}
		// debug($lists);
		$_SESSION['uslugi'] = $lists;
		$modelPerson = new Customers;
		//$persons = $modelPerson->getPersonName();

		$gr = [];
		$grup = [];
		foreach ($lists  as $kay => $value) {
			//debug($value['ID_U']);
			array_push($gr, $model->getSerByNum($value['ID_U']));
			//$gr = $model->getSerByNum($value['ID_U']);
		}
		$grup = $gr;
		for ($i = 0; $i < count($grup); $i++) {
			for ($j = $i + 1; $j < count($grup) - 1; $j++) {
				//debug($grup[$i][0]['ID_GR']);
				if ($grup[$i][0]['ID_GR'] == $grup[$j][0]['ID_GR']) {
					unset($grup[$j]);
				}
			}
		}
		// debug($grup);

		foreach ($grup  as $kay => $value) {
			foreach ($value as $kays => $values) {
				//debug($values['ID_GR']);
				$pergroup = $modelPerson->getPersonNameId($values['ID_GR']);
				//$grName[] = $value1;
			}
		}
		$_SESSION['group'] = $pergroup;

		//debug($pergroup);
		$this->setTitle('Просмотр заказов');
		$this->setData(compact('contract', 'lists', 'pergroup'));
	}

	//выбор мастера
	public function changeperAction()
	{
		//номер услуги
		$id_u = $this->getRequestID();
		//debug($id_u);
		$model = new Booking;
		//$pergroup = $_SESSION['group'];
		$modelPerson = new Customers;

		//номер группы
		$numgr = $model->getSerByNum($id_u);
		//debug($numgr);
		foreach ($numgr  as $kay => $value) {
			$pergroup = $modelPerson->getPersonNameId($value['ID_GR']);
			//$grName[] = $value1;
		}
		//$pergroup = $modelPerson->getPersonNameId($id_u);
		//debug($pergroup);
		$lists = $_SESSION['uslugi'];
		$contract = $_SESSION['contract'];
		//debug($lists);
		//debug($pergroup);
		$this->setTitle('Выбор мастера');
		$this->setData(compact('contract', 'lists', 'pergroup'));
	}

	//изменение заказов
	public function changeAction()
	{
		$contract_id = $this->getRequestID();
		$model = new Booking;
		$contract = [];
		$devices = [];
		//$contract = $model->getRowContracts($contract_id);
		$contract = $model->getContractSql($contract_id);
		$_SESSION['contract'] = $contract;
		$model->contract = $contract;
		// debug($contract_id);
		//debug($contract);
		if (!$contract) {
			throw new \Exception('Страница не найдена', 404);
		} else {
			$lists = $model->getDetal($contract_id);
			$model->uslugi = $lists;
		}
		 // debug($lists);
		$_SESSION['uslugi'] = $lists;
		$modelPerson = new Customers;
		//$persons = $modelPerson->getPersonName();

		$gr = [];
		$grup = [];
		foreach ($lists  as $kay => $value) {
			//debug($value['ID_U']);
			array_push($gr, $model->getSerByNum($value['ID_U']));
			//$gr = $model->getSerByNum($value['ID_U']);
		}
		$grup = $gr;
		for ($i = 0; $i < count($grup); $i++) {
			for ($j = $i + 1; $j < count($grup) - 1; $j++) {
				//debug($grup[$i][0]['ID_GR']);
				if ($grup[$i][0]['ID_GR'] == $grup[$j][0]['ID_GR']) {
					unset($grup[$j]);
				}
			}
		}
		// debug($grup);

		foreach ($grup  as $kay => $value) {
			foreach ($value as $kays => $values) {
				//debug($values['ID_GR']);
				$pergroup = $modelPerson->getPersonNameId($values['ID_GR']);
				//$grName[] = $value1;
			}
		}
		$_SESSION['group'] = $pergroup;

		//debug($pergroup);
		$this->setTitle('Просмотр заказов');
		$this->setData(compact('contract', 'lists', 'pergroup'));
	}

}
