<?php

namespace app\controllers;

use fw\core\Db;
use app\models\User;
use app\models\Customers;
use app\models\Booking;
use fw\core\base\View;
use app\widgets\menudev\Menudev;

class UserController extends AppController
{
    public function __construct($route)
    {
        parent::__construct($route); //сначало выполняем

        if (!$this->isUserLog($this->route['action'], $this->route['controller']) && $route['action'] != 'login' && $route['controller'] != 'User') {
            // $this->destSession();
            redirect(PATH . '/user/login');
        }
    }
    //регистрация
    public function singupAction()
    {
        // $this->setMeta('Регистрация');
        $this->setTitle('');
        if (!empty($_POST)) {
            // debug($_POST);


            //создаем объект модели
            $user = new User();
            $data = $_POST;
            $table = $user->table; //'users'
            // die;
            $user->loadAtr($data, $table); //для формирования [] атрибуттов из полей формы


            //не валидны
            if (!$user->validate($data) || !$user->checkUnique()) {
                //получили ошибки
                $user->getErrors();
                //запоминаем, что вводил пользователь
                $_SESSION['form_data'] = $data;
                redirect();
            }

            //если данные валидны кодируем пароль
            $user->attributes['password'] = password_hash(
                $user->attributes['password'],
                PASSWORD_DEFAULT
            );

            if ($user->insertSingleRow('users') > 0) {
                $_SESSION['success'] = "Вы успешно зарегестрировались";
            } else {
                $_SESSION['error'] = "Ошибка! Попробуйте позже";
                // unset($_SESSION['error']);
            }
            redirect();
            //debug($user);
            //debug($_POST); 
            //die; 
        }
    }

    //авторизация
    public function loginAction()
    {
        //$this->setMeta('Авторизация');
        $this->setTitle('');
        //если данные пришли POST то проверяем их
        if (!empty($_POST)) {
            //удаляем старые сессии
            if (isset($_SESSION['user'])) {
                $this->destSession();
            }
            //куки просмотров
            if (!empty($_COOKIE['recentlyViewed'])) {
                unset($_COOKIE['recentlyViewed']);
                setcookie('recentlyViewed', null, -1, '/');
            }
            //создаем объект модели
            $user = new User();
            if ($user->isLogin()) {
                $_SESSION['success'] = "Вы успешно авторизованы";
                redirect(PATH . '/');  //сделать переход на страницу                 
            } else {
                $_SESSION['error'] = "Логин/пароль введены неверено";
                // unset($_SESSION['error']);
                redirect();
            }
        }
    }
    //выход
    public function logoutAction()
    {
        $this->destSession();
        redirect(PATH . '/user/login');
    }
    //просмотр заказов
    public function BookingAction()
    {


        $model = new Customers;
        $modelBook = new Booking;
        $user = $_SESSION['user'];
        $customer = $model->getCustomer($user['ID']);
        $contracts = $modelBook->getSerUser($user['ID']);

        $detals = $modelBook->getDetal($contracts[0]['ID_O']);
        // debug($customer);
        // debug($_SESSION);
        //debug($contracts);
        $this->setTitle('Ваши заказы');
        $this->setData(compact('contracts', 'detals', 'customer'));
    }
    //просмотр заказов
    public function PersonalAction()
    {


        $model = new Customers;
        $modelBook = new Booking;
        $user = $_SESSION['user'];
        $customer = $model->getCustomer($user['ID']);



        //debug($customer);
        // debug($_SESSION);
        // debug($user);
        $this->setTitle('Ваши заказы');
        $this->setData(compact('customer', 'user'));
    }
}
