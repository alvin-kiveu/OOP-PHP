<?php
include 'include/autoloder.inc.php';
//https://www.youtube.com/watch?v=yEWlyAjKH6M

class FetchUserInfo extends DatabaseConnection
{

  function userInfo()
  {
    $stmt = $this->connect()->query("SELECT * FROM members");
    while ($row = $stmt->fetch()) {
      echo $row['fullnames'] . '<br>';
      echo $row['phonenumber'] . '<br>';
      echo $row['password'] . '<br>';
      echo '<br><br>';
    }
  }
}

$data = new FetchUserInfo;
$data->userInfo();