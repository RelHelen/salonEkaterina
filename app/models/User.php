<?php

namespace app\models;

use fw\core\base\Model;
use fw\core\Db;

class User extends Model
{
    public $table = 'users';
    public $pk = 'ID';
    //поля ожидаем из формы для регистрации
    public $attributes = [
        'login' => '',
        'password' => '',
        'mail' => '',
        'phone' => '',
        'role' => '',
        'data_reg' => ''

    ];

    public $rules = [
        'required' => [
            ['login'],
            ['password'],
        ],
        'email' => [
            ['mail'],
        ],
        'lengthMin' => [
            ['pass', 6],
        ],
    ];


    /**
     *получение id пользователя из users
     */
    public  function getIdUserByLogin($login)
    {
        $usersParam = [
            'login' => $login
        ];
        $user  = $this->getAssocArr("SELECT id FROM users WHERE login=:login LIMIT 1", $usersParam);
        return $user['id'];
    }
    /**
     * получение клиента по пользователю
     */
    public  function getIdCustomer($id)
    {
    }
    /**
     * проверка уникальности логина-почты
     */
    public  function checkUnique()
    {

        $params = [
            'login' => $this->attributes['login'],
            'mail' => $this->attributes['mail'],
        ];
        $user = $this->findBySql('SELECT * FROM users WHERE login =:login OR mail = :mail LIMIT 1', $params);
        // debug($user);
        // die;

        if ($user) {
            if ($user->login == $this->attributes['login']) {
                $this->errors['unique'][] = 'Этот логин уже занят';
            }
            if ($user->mail == $this->attributes['mail']) {
                $this->errors['unique'][] = 'Эта почта уже используется';
            }
            return false;
        }
        return true;
    }
    /**
     * Вставка строки в таблицу
     * @return
     */
    public function insertSingleRow($table)
    {
        $this->attributes['data_reg'] = date("Y-m-d H:i:s");
        $sql = "INSERT INTO $table ( 
                 login,
                 password,
                 mail,                
                 phone,
                 role,
                 data_reg                         
            )
            VALUES (
                 :login,
                 :password,
                 :mail,                
                 :phone,
                 :role,
                 :data_reg              
            )";

        $params = [
            'login' => $this->attributes['login'],
            'password' => $this->attributes['password'],
            'mail' => $this->attributes['mail'],
            'phone' => $this->attributes['phone'],
            'role' => $this->attributes['role'],
            'data_reg' => $this->attributes['data_reg']
        ];

        // debug($this->attributes['users_data_reg']);
        // foreach ($params as $value) {
        //     echo gettype($value), "\n";
        // }
        // die;
        $res = $this->pdo->execute($sql, $params);
        $this->pdo->lastInsertId(); //номер последнего индекса
        return $res;
    }


    /**
     * логин
     * @param bool $isAdmin
     
     * проверка  логина с бд при авторизации
     */
    public  function isLogin($isAdmin = false)
    {
        // debug($_POST);

        $login = !empty(trim($_POST['login']))
            ? filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING)
            : null;

        $pass = !empty(trim($_POST['password']))
            ? filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING)
            : null;

        if ($login && $pass) {

            $params = [
                'login' => $login
            ];
            if ($isAdmin) {
                //авторизация админа для админки
                if (isset($_SESSION['user'])) {

                    unset($_SESSION['user']);
                };
                $params = [
                    'login' => $login,
                    'role' => 'admin'
                ];
                $user = $this->getAssocArr('SELECT * FROM users WHERE login=:login AND role=:role LIMIT 1', $params);
            } else {
                //авторизация обычного пользователя
                //из таблицы users получаем запись по  логину 
                $user =  $this->getAssocArr('SELECT * FROM users WHERE login=:login  LIMIT 1', $params);
                // debug($user);
            }
            if ($user) {
                // debug($user);
                //сравниваем пароль с hash паролем из бд таблицы users и создаем сессию
                if (password_verify($pass, $user['password'])) {
                    foreach ($user as $key => $val) {
                        $_SESSION['user'][$key] = $val;
                        //debug($_SESSION);
                        //ключ - название полей таблицы
                        if ($key == 'login' || $key == 'role') {
                            //$_SESSION['user'][$key] = $val;

                        }
                        if (!$isAdmin) {
                            //поиск клиента
                            $modelCustomers = new Customers;
                            //debug($user['id']);
                            $idCustomers = $modelCustomers->getIdCustomer($user['ID']);
                            //debug($idCustomers);
                            if ($idCustomers) {
                                $_SESSION['customer']['id'] = $idCustomers;
                            }

                            //  $_SESSION['user']['admin'] = 'admin';
                        }
                    }
                    return true;
                }
            }
        }
        return false;
    }


    //проверка что пользователь авторизован как admin
    public static function isAdmin()
    {
        //если существует в сессии пользователь
        //и он является  администратором
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }

    //проверка что пользователь авторизован как user
    public static function isUser()
    {
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'user');
    }
}
