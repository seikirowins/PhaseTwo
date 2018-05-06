<?php
/*
Login script for the CLDH-EI website
written by Seiki Rowins Bie
*/
use \User\User as User;
use \Input\ResultMessage as ResultMessage;

$user = new User();
$errorMessage = new ResultMessage();






if(isset($_POST['signInbtn']))
{
	$login_details = ["username"=>$_POST['username'],
				      "password"=>$_POST['pass']];

	if(!$user->Login($login_details))
	{
		$errorMessage->setError("invalid","Username or password is incorrect.");
	?>
	<script type="text/javascript">
		$(function()
		{
			$("#portal").modal("show");
			return false;
		})
	</script>
	<?php
		
	} 

		try
		{
			$user->Redirect($user->getSession("roleid"));
		}catch(Exception $e)
		{
			echo "Exception Error:". $e->getMessage();
		}	
	
}
?>