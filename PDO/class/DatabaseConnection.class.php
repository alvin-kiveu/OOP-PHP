<?php

class DatabaseConnection
{
  private $host = 'localhost';
  private $user = 'root';
  private $password = '';
  private $database = 'kejapay';

  public function connect()
  {
    $connector = "mysql:host={$this->host};database={$this->database}";
    $pdo = new PDO($connector, $this->user, $this->password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}

// $data = new DatabaseConnection;
// echo $data->connect();