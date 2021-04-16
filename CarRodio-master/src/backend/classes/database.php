<?php
class database {
  private $servername;
  private $username;
  private $password;
  private $dbname;

  protected function connect() {
    $this->servername='localhost';
    $this->username='root';
    $this->password='';
    $this->dbname='cc';

    // $conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
    // return $conn;
    $dsn= 'mysql:host=' .$this->servername . ';dbname=' .$this->dbname;
    $pdo= new PDO($dsn,$this->username,$this->password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $pdo;
  }
}
 ?>
