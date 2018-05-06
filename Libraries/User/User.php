<?php
namespace User;
use \DB\Query as Query;
class User extends Query
{

	use \SessionManagement\Session;
	use \Security\DataFiltering;


	public function __construct()
	{
		$this->Connect();
	}

	/**
	 * @param array login details
	 */
	public function Login(array $details)
	{
		
		if(empty($details) || !is_array($details))
		{
			throw new Exception("Please make sure the $details parameter is set properly");
			return false;
		}
		extract($details);
		$login = $this->getWithCondition("Users","username=\"$username\" AND password=\"$password\" ");
		$login->Execute();
		if($login->fetchColumn() > 0)
		{
			$data = $login->fetch();
			$this->setSession(array(
				"userid"=>$data['user_id'],
				"username"=>$data['username'],
				"roleid"=>$data['role_id']
			));
			return true;
		} else {
			return false;
			
		}

	}

	/**
	 * @param [integer] role_id
	 */
	public function Redirect($role_id)
	{
		/*if(empty($role_id) || !is_numeric($role_id))
		{
			throw new Exception("Role id must be numeric");
			return false;
		}*/

		switch($role_id)
		{
			case 1:
			header('location: admission.php');
			break;
			case 2:
			header('location: IT.php');
			break;
		}
	}

	
	
	public function Logout()
	{
		$this->DestroyAllSession();
	}



}