<?php

namespace app\models;

use fw\core\base\Model;
use app\models\User;
use fw\core\Db;
//use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class Booking extends Model
{
  public $table = 'contracts';
  // public $pk = 'contr_id_cust';
  public $pk = 'id';
  public $user;
  public $customers;
  public $contracts;
  public $contract;
  public $uslugi;
  public  $idUser;

  public function getContracts($start, $perpage)
  {
    $contacts = $this->findSql(
      "SELECT * FROM order_u ORDER BY status, DATA_VISIT  LIMIT {$start} ,{$perpage}"
    );

    foreach ($contacts  as $kay => $value) {
      $contactsAll[$kay] = $value;
    }
    return  $contactsAll;
  }



  /**
   * получение договора  по id договора
   * из БД
   */
  public function getContractSql($num)
  {
    $contractParam = [
      'num' => $num
    ];
    $contract = $this->getAssocArr("SELECT * FROM order_u WHERE ID_O=:num    LIMIT 1", $contractParam);


    if ($contract) {

      return  $contract;
    } else {
      return false;
    }
  }
  /**
   * получение всех групп услуг   по номеру услуги
   * из БД
   */
  public function getSerByNum($id)
  {

    $param = [
      'id' => $id
    ];
    $contract = $this->findSql("SELECT ID,ID_GR FROM uslugi WHERE ID=:id", $param);

    foreach ($contract  as $kay => $value) {
      $serv[$kay] = $value;
    }

    if ($serv) {

      return  $serv;
    } else {
      return false;
    }
  }

  /**
   * получение договора по id  пользователя
   *  
   */
  public function getSerUser($id)
  {

    $param = [
      'id' => $id
    ];
    $contract = $this->findSql("SELECT * FROM order_u WHERE ID_U=:id", $param);

    foreach ($contract  as $kay => $value) {
      $serv[$kay] = $value;
    }

    if ($serv) {
      return  $serv;
    } else {
      return false;
    }
  }
  /**
   * получение договора по клиенту  
   *  
   */
  public function getSerCustomer($id)
  {

    $param = [
      'id' => $id
    ];
    //$contract = $this->findSql("SELECT * FROM order_u WHERE ID_U=:id", $param);
    $contract = $this->findSql("SELECT order_u.ID_O,order_u.num, order_u.DATA_VISIT, order_u.DATA_F, order_u.COMMENT,order_u.status,  ROUND(SUM(detali_o.PRICE),2) AS COST   FROM (order_u 
     JOIN detali_o ON order_u.ID_O=detali_o.ID_O)
    WHERE order_u.ID_U=:id GROUP BY order_u.ID_O", $param);

    foreach ($contract  as $kay => $value) {
      $serv[$kay] = $value;
    }

    if ($serv) {
      return  $serv;
    } else {
      return false;
    }
  }


  /**
   * получение списка деталей по договору
   *  
   */

  public function getDetal($num)
  {
    $contractParam = [
      'num' => $num
    ];
    $data = $this->findSql("SELECT * FROM detali_o  WHERE ID_O=:num ", $contractParam);
     
    $uslugi = [];
    foreach ($data  as $kay => $value) {
      $numer = $value['ID_U'];
      $param = [
        'numer' =>  $numer
      ];
      $uslugi = $this->getAssocArr("SELECT * FROM uslugi  WHERE ID=:numer ", $param);
      foreach ($value as $kay => $val) {
        if ($kay == 'ID_U') {
          $list[$kay] = $val;
          $list['USLUGA'] = $uslugi['USLUGA'];
        } else {
          $list[$kay] = $val;
        }
      }
      $lists[] = $list;
    }
    if ($lists) {
      return  $lists;
    } else {
      return false;
    }
  }


  public function getViewed()
  {
    if (!empty($_COOKIE['recentlyViewed'])) {
      $recentlyViewed = $_COOKIE['recentlyViewed'];
      $recentlyViewed = explode('.', $recentlyViewed);
      // return array_slice($recentlyViewed, -3);
      return $recentlyViewed;
    }
    return false;
  }

  public function getAllViewed()
  {
    if (!empty($_COOKIE['recentlyViewed'])) {
      return $_COOKIE['recentlyViewed'];
    }
    return false;
  }
}
