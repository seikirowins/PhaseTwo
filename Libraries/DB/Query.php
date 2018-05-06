<?php
namespace DB;
use \Exception;
class Query extends Database
{

	public function __construct()
	{
		$this->Connect();
	}


	public function Insert($table,array $data)
	{
		if(!isset($table) || empty($table))
		{
			throw new Exception("Please make sure the table name is set properly.");
			return false;
		}

		if(is_numeric($table))
		{
			throw new Exception("Table name cannot be numeric");
			return false;
		}

		if(!isset($data) || !is_array($data))
		{
			throw new Exception("Please make sure the data parameter is set correctly.");
			return false;
		}

		$columns = [];
		$values = [];

		foreach($data as $col => $val)
		{
			array_push($columns,$col);
			array_push($values,$val );
		}

		$insert = $this->connection->prepare("INSERT INTO $table (" . implode(",", $columns) . ")VALUES('" . implode("','", $values) ."')");
		$insert->Execute();


	}

	public function getLastID()
	{
		return $this->connection->lastInsertId();
	}




	public function getWithCondition($table,$condition)
	{
		$result = $this->connection->prepare("SELECT * FROM $table
			 WHERE $condition");
		return $result;
	}

	public function getAll($Table)
	{
		$result = $this->connection->prepare("SELECT * FROM $Table");
		return $result;

	}
	


}