<?php
namespace DB;
use \PDO;
abstract class Database
{


	protected $connection;
	private $_instance = null;

	private function __construct()
	{
		try
		{
			$this->Connect();
		}catch(PDOException $e)
		{
			echo "ERROR: " . $e->getMessage();
		}
	}




	protected function Connect()
	{
		$host = HOST;
		$db_name = DB_NAME;
		$charset = charset;
		$db_driver = DB_DRIVER;
		$config = "$db_driver:host=$host;dbname=$db_name";
		$opt = [
			  PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION,
  			  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  			  PDO::ATTR_EMULATE_PREPARES   => false

		];
		$this->connection = new PDO($config,USER,PASS,$opt);
		if(!$this->connection)
		{
			throw new Exception("Please check your database configuration");
			
		}
		return $this->connection;
	}



}