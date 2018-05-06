<?php
namespace Input;

class Validation extends ResultMessage
{

	public function Validate(array $inputs)
	{
		foreach($inputs as $input_v => $error)
		{
			foreach($error as $err_k => $err_v)
			{
				if(empty($_POST[$input_v]))
				{
					$this->SetError($err_k,$err_v);
				}
			}
		}
	}

	


}


