<?php
class DBController
{
  #Database Connection Properties
  protected $host = "localhost";
  protected $username = "root";
  protected $password = "";
  protected $database = "shopee";

  #Connection Property
  public $con = null;
  protected $error;
  protected $stmt;

  #Call Constructor
  public function __construct()
  {
    try {
      $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->database;
      $options = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
      ];
      #echo "Connected!";
      $this->con = new PDO($dsn, $this->username, $this->password, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo "Connection Error...!" . $this->error;
    }
  }

  #destructor function
  public function __destruct()
  {
    $this->closeConnection();
  }

  #Closing connection 
  protected function closeConnection()
  {
    if ($this->con != null) {
      $this->con = null;
    }
  }
}