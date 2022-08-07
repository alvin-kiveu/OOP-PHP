<?php
include 'include/autoload.inc.php';

class fetchData extends DatabaseConnection
{
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
$data = new fetchData;
$result = $data->viewData();
if ($result) {
  foreach ($result as $row) {
    echo $row['fullnames'] . "<br><br>";
  }
}