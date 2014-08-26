<?php
include_once('dataBase.php');

// Define configuration
define("DB_HOST", "mysql1.000webhost.com");
define("DB_USER", "a9144011_root");
define("DB_PASS", "proyect777");
define("DB_NAME", "a9144011_proyect");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
