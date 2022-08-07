<?php
include 'include/autoload.inc.php';


class InsertInfomation extends DatabaseConnection
{

  public function insetDate()
  {
    $db = $this->_connector();
    $insert = $db->query("INSERT INTO members(fullnames,phonenumber,password) VALUES ('Alvin Kiveu','0768168060','alvinnivla')");
    return $msg = "Data Inserted sucessfully";
  }

  public function callData($fullnames, $phonenumber,  $password)
  {
    $db = $this->_connector();
    $db->query("INSERT INTO members(fullnames,phonenumber,password) VALUES ('$fullnames', '$phonenumber', '$password')");
  }
}

$data = new InsertInfomation;
$data->insetDate();
$data->callData('Nelson Bugeti', '0713015674', '12345678');