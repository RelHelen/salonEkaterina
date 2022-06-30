<?php

namespace app\models;

use fw\core\base\Model;
use fw\core\Db;

class Serv extends Model
{
  public $table = 'vid_uslug';
  public $pk = 'ID_U';
  public $VidServices;
  //вид услуг  
  public function getVidServices()
  {
    $VidServices = $this->findAll('vid_uslug');
    return $VidServices;
  }
  //группа  услуг
  public function getGrupServicesPag($start, $perpage)
  {
    $contacts = $this->findSql(
      "SELECT * FROM grup_u  LIMIT {$start} ,{$perpage}"
    );

    foreach ($contacts  as $kay => $value) {
      $contactsAll[$kay] = $value;
    }
    return  $contactsAll;
  }
  public function getGrupServicesAll()
  {

    $data = $this->findAll('grup_u');

    return $data;
  }

  public function getGrupServices($num)
  {

    $param = [
      'num' => $num
    ];
    $data = $this->findBySql("SELECT * FROM grup_u WHERE ID_V=:num   ", $param);

    return $data;
  }
  // услуга  
  public function getServices($num)
  {

    $param = [
      'num' => $num
    ];
    $data = $this->findBySql("SELECT * FROM uslugi WHERE ID_GR=:num ", $param);
    return $data;
  }
  // все услуги  

  public function getServicesPag($start, $perpage)
  {
    $contacts = $this->findSql(
      "SELECT * FROM uslugi  LIMIT {$start} ,{$perpage}"
    );

    foreach ($contacts  as $kay => $value) {
      $contactsAll[$kay] = $value;
    }
    return  $contactsAll;
  }
  public function  Services()
  {

    $data = $this->findAll('uslugi');
    return $data;
  }
  //все услуги по видам для страницы Услуги
  public function getServicesAll()
  {
    $VidServices = $this->getVidServices();
    // debug($VidServices);
    $grup = [];
    if ($VidServices) {
      $i = 1;

      foreach ($VidServices as $keys =>  $vals) {
        foreach ($vals as $key => $val) {
          if ($key == 'ID_U') {
            $grup = $this->getGrupServices($val);
          }
          $GRServices[$i][$key] = $val;
        }
        foreach ($grup as $keyg => $valg) {
          if ($valg['ID_V'] = $vals['ID_U']) {
            $GRServices[$i]['GRUP'] =  $grup;
          }
        }
        $i++;
      }
    }
    //debug($GRServices);
    // $services = $this->findSql("SELECT vid_uslug.ID_U,vid_uslug.VID_U, grup_u.NAME_GR, grup_u.CENA_GR   
    // FROM vid_uslug 
    // JOIN grup_u ON vid_uslug.ID_U=grup_u.ID_V    

    // -- LEFT OUTER JOIN uslugi ON grup_u.ID_GR=uslugi.ID_GR 
    // -- GROUP BY vid_uslug.ID_U ORDER BY vid_uslug.ID_U

    // ");
    //$data = $this->findSql('vid_uslug', '');
    // foreach ($GRServices as $keys => $mass) {
    //   $servicesAll[$keys] = $mass;
    // }
    // echo "------------------------------------------";
    // debug($servicesAll, true);




    return $GRServices;
  }

  //все услуги   страницы Цены
  public function getServicesPrices()
  {
    $VidServices = $this->getVidServices();
    // debug($VidServices);
    $grup = [];
    if ($VidServices) {
      $i = 1;

      foreach ($VidServices as $keys =>  $vals) {
        foreach ($vals as $key => $val) {
          if ($key == 'ID_U') {
            $grup = $this->getGrupServices($val);
          }
          $GRServices[$i][$key] = $val;
        }
        foreach ($grup as $keyg => $valg) {
          if ($valg['ID_V'] = $vals['ID_U']) {
            $GRServices[$i]['GRUP'] =  $grup;
          }
        }
        $i++;
      }
    }
    return $GRServices;
  }
}
