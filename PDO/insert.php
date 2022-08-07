<?php
include 'include/autoloder.inc.php';

class InsertInfomation extends DatabaseConnection
{

  function insertUserInfo()
  {
    $stmt = $this->connect()->prepare("INSERT INTO members(fullnames,phonenumber,password) VALUES ('UMESKIA SOFTWARES','0765432122','12345678')");
    $stmt->execute();
    return "DATA INSERTED SUCESSFULY";
  }
}

$data = new InsertInfomation;
echo $data->insertUserInfo();