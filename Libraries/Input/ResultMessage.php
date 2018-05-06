<?php
namespace Input;

class ResultMessage
{

	private $errors = [];

	public function SetError($key,$value)
	{
		$this->errors[$key] = $value;
	}

	public function getError($key)
	{
		if(!empty($this->errors[$key]))
		{
		  return $this->errors[$key];
		}
	}

	public function NoError()
	{
		if(empty($this->errors))
		{
			return true;
		}
	}

	
}

