<?php
namespace Security;

class Authorization
{
	use \SessionManagement\Session;


	public function isAuthorized(array $session)
	{
		extract($session);
		if($this->getSession("roleid") != $roleid || empty($this->getSession("userid")))
		{
			header('location: index.php');
			return false;
		}
		
	}
}
