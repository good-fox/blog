<?php
class Database{
public $dbserver = '';
public $username = '';
public $password = '';
public $database = '';
public $db = '';
  public function __construct(){
  	$this->dbserver = 'localhost';
  	$this->username = 'Vadym'; //имя пользователя для доступа к базе данных
  	$this->password = 'admin'; //пароль для доступа к базе данных
  	$this->database = 'blog'; //имя базы данных
  	$this->db = mysqli_connect($this->dbserver, $this->username, $this->password, $this->database);

    //new PDO("mysql:host=".$this->dbserver.";
  	//dbname=".$this->database, $this->username, $this->password);
  }
}
?>
