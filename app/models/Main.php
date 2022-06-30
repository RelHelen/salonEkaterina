<?php

namespace app\models;

use fw\core\base\Model;
use fw\core\Db;

class Main extends Model
{
  public $table = 'persons';
  public $pk = 'ID_P';
  public function getVidUslug()
  {
    $data = $this->findAll('vid_uslug');
    return $data;
  }
  //акции для главной странице
  public function getPromotion()
  {
    $params = [
      'CATEGORIA' => 'Акции',
      'PAGE_S' => 'main'
    ];
    $sql = "SELECT * FROM pages WHERE CATEGORIA=:CATEGORIA AND PAGE_S=:PAGE_S";
    $data = $this->findBySql($sql, $params);
    return $data;
  }
  //вывод для главной странице
  public function getPerson()
  {
    $params = [
      'PAGE_S' => 'main'
    ];
    $sql = "SELECT * FROM persons WHERE PAGE_S=:PAGE_S";
    $data = $this->findBySql($sql, $params);
    return $data;
  }
}
