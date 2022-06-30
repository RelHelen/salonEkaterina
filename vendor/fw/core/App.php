<?php

namespace fw\core;

use fw\core\Registry;
use fw\core\ErrorHandler;
use fw\core\Router;

class App
{
	public static $app;
	public function  __construct()
	{
		$query = trim($_SERVER['QUERY_STRING'], '/');
		session_start();
		self::$app = Registry::instance();
		new ErrorHandler();
		Router::dispatch($query);
		self::getParams();
	}
	protected function getParams()
	{
		$params = require_once CONF . '/params.php';
		if (!empty($params)) {
			foreach ($params as $k => $v) {
				self::$app->setProperty($k, $v);
			}
		}
	}
}
