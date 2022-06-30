<?php

/**наследуемся от базового контроллера 
 */

namespace app\controllers;

use fw\core\base\Controller;
use fw\core\base\Model;
use fw\core\App;
use fw\core\Cache;
use fw\core\Db;
use app\models\User;

use app\models\AppModel;


class AppController extends Controller
{
  public $menu;
  public $meta = [];
  public $model;
  public $user;
  public function __construct($route)
  {
    parent::__construct($route); //сначало выполняем родительский конструктор
    //debug($route);    
    if ($_SESSION) {
      //  debug($_SESSION, true);
    };

    $this->setMeta("Салон красоты Екатерина");

    $this->setTitle('Салон красоты Екатерина');
    $this->layout = 'default';
    //подключение к бд и таблице menu
    $model = new AppModel;
    $this->user = new User;

    //debug($this->route);
    //debug($this->controller);
    //debug($this->model);

    //выполняем что нибудь только для конкретного конторллера и страницы
    // if($this->route['controller']=='Main' && $this->route['action']=='test'){
    //   echo "<h3>тест в майне</h3>";
    // };    
  }
  //получение числа из метода Get по полю id или по другому полю
  public function getRequestID($get = true, $id = 'id')
  {
    if ($get) {
      $data = $_GET;
    } else {
      $data = $_POST;
    }
    $id = !empty($data[$id]) ? (int)$data[$id] : null;
    // if (!$id) {
    //   throw new \Exception('Страница не найдена', 404);
    // }
    return $id;
  }

  /**
   * в кеш положим массив категрий  
   */
  public static  function cacheCategory()
  {
    $model = new AppModel;
    $cache = Cache::instance();
    $cats = $cache->get('cats'); //ключ cats хранит массив категорий
    if (!$cats) {
      ////$cats = self::getCat();
      $cats = $model->findFromModel();
      $cache->set('cats', $cats);
    }
    return $cats;
  }
  public static function getCat()
  {
    $model = new AppModel;
    $res =  $model->findFromModel();
    // debug($res);

    $cat = array();
    foreach ($res as $value) {
      $cat[$value['id']] = $value;
    }

    return  $cat;
  }

  /**
   * в параметры  положим в массив параметров и в кеш из table: params 
   * которые можно добавлять autoload=1
   */
  protected function setParamsFS()
  {
    $modelParams = new AppModel;

    $cache = Cache::instance();
    $params = $cache->get('params');
    //положили в кеш
    if (!$params) {
      $param = $modelParams->getAssoc("SELECT * FROM params WHERE autoload=1");
      if (!empty($param)) {
        foreach ($param as $keys => $vals) {
          foreach ($vals as $k => $v) {
            $params[$vals['params_name']] = $vals['params_value'];
          }
        }
      }
      $cache->set('params', $params);
      // $cacheParams = $params;
    }
    return $params;
  }

  /**
   * проверка, что пользовтаель авторизован и имеет доступ к странице
   */
  public  function isUserLog($action, $controller)
  {
    if ($this->user::isUser() && $this->route['action'] == $action && $this->route['controller'] == $controller) {
      return true;
    }
  }
  /**
   * удаление сессий
   */
  public  function destSession()
  {
    session_destroy();
  }

  /**
   * 
   * вернет login user из сессии
   */
  public static function logUser()
  {
    return $logUser = isset($_SESSION['user']['login']) ? hsc($_SESSION['user']['login']) : null;
  }
  /**
   * 
   * вернет id клиента из сессии
   */
  public static function idCustomer()
  {
    return $idCustomer = isset($_SESSION['customer']['id']) ? hsc($_SESSION['customer']['id']) : null;
  }
}
