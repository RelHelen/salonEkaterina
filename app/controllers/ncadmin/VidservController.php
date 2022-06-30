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

class  VidservController extends AppadminController
{
	public $user;
	public $model;
	public function __construct($route)
	{
		//$this->model = new AppModel;
		$this->setTitle("Вид услуг");
		parent::__construct($route);
	}
	public function indexAction()
	{

		$model = new Serv;
		$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$perpage = 10;
		$count = $model->count('vid_uslug');
		$pagination = new Pagination($page, $perpage, $count);
		$start = $pagination->getStart();
		$services = $model->getVidServices();
		$_SESSION['services'] = $services;
		$this->setTitle("Вид услуг");
		$this->setData(compact('services', 'count', 'pagination'));
		//$this->setData(compact(''));
	}
	public function changeAction()
	{
		$id = $this->getRequestID();
		$data = $_SESSION['services'];

		foreach ($data as $service) {
			//debug($service['ID_U']);
			if ($service['ID_U'] == $id) {
				$services = $service;
			}
		}
		//debug($services);
		$this->setTitle("Виды услуг");
		$this->setData(compact('services'));
	}
	public function addAction()
	{

		$this->setTitle("Добавить услугу");
	}
}
