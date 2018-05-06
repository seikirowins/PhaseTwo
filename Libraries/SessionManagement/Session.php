<?php
namespace SessionManagement;

trait Session
{



	public function setSession(array $session)
	{
		foreach($session as $key => $value)
		{
			$_SESSION[$key] = $value;
		}
	}

	public function getSession($key)
	{
		return $_SESSION[$key];
	}


	public function DestroyAllSession()
	{
		unset($_SESSION);
		session_destroy();
	}

}