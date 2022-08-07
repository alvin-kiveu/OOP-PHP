<?php
include 'conn.php';

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

  public function viewData()
  {
    $db = $this->_connector();
    $result = $db->query("SELECT * FROM members");
    if ($result->num_rows > 0) {
      return $result;
    } else {
      return false;
    }
  }
}

$data = new InsertInfomation;
// echo $data->insetDate();
//$data->callData('Nelson Bugeti', '0713015674', '12345678');
$result = $data->viewData();
if ($result) {
  foreach ($result as $row) {
    echo $row['fullnames'] . "<br><br>";
  }
}