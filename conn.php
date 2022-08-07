<?php
class DatabaseConnection
{
  private $localhost = "localhost";
  private $username = "root";
  private $password = "";
  private $databaseName = "kejapay";

  protected function _connector()
  {
    try {
      $mysqli = new mysqli("$this->localhost", "$this->username", "$this->password", "$this->databaseName");
      $result = $mysqli;
    } catch (Exception $e) {
      error_log($e->getMessage());
      exit('Error connecting to database');
      $result = "Error connecting to database";
    }

    return $result;
  }
}