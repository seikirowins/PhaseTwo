<?php
namespace Security;

trait DataFiltering
{


	public function SanitizeData($con,$input)
	{
		
			return mysqli_real_escape_string($con,strip_tags(stripslashes($input)));
		
	}



}