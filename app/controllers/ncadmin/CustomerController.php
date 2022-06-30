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


class CustomerController extends AppadminController
{

	public $model;
	public function __construct($route)
	{
		$this->model = new Customers;

		parent::__construct($route);
	}
	//все клиенты
	public function indexAction()
	{

		$model = new Customers;
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 10;
		$count = $model->count('customers');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();
		//$contracts = $model->getCustomers($start, $perpage);
		$contracts = $model->getCustomersUser($start, $perpage);
		//debug($contracts);
		$this->setTitle("Клиенты");
		$this->setData(compact('count', 'contracts', 'pagination'));
	}

	//просмотр клиента
	public function viewAction()
	{

		$item_id = $this->getRequestID(); // Customers.ID
		//debug($item_id);
		$model = new Customers;
		$customer = $model->getDetal($item_id);
		$contruct_id = ($customer['ID_U']);
		//debug($contruct_id);
		//debug($customer);
		$modelBooking = new Booking;
		$contracts = $modelBooking->getSerCustomer($contruct_id);
		//debug($contracts);
		// foreach ($contracts  as $kay => $value) {
		// 	//debug($value["ID_O"]);
		// 	$dalies[$kay]  = $modelBooking->getDetal($value["ID_O"]);
		// }
		//getDetal($num)

		//debug($dalies);
		// if ($this->isAjax()) {
		// 	$id = $_GET['id'];
		// 	$idcontr = $_GET['idcontr'];
		// 	//debug($id);
		// 	$dalies  = $modelBooking->getDetal($idcontr);
		// 	debug($dalies);
		// 	$this->setData(compact('customer', 'contracts', 'dalies'));
		// }
		$this->setTitle("Просмотр клиента");
		$this->setData(compact('customer', 'contracts'));
	}
	//просмотр клиента
	public function viewdetAction()
	{
		$modelBooking = new Booking;
		$this->layout = 'layoutajax';

		if ($this->isAjax()) {
			// View:: 'viewdet';
			//debug($this->route);
			//debug($this->view);
			$id = $_GET['id'];
			$idcontr = $_GET['idcontr'];
			//	debug($idcontr);
			$dalies  = $modelBooking->getDetal($idcontr);
			//	debug($dalies);
			$this->setData(compact('dalies'));
		}
	}
}
