<?php
namespace Template;


class Page extends \html\Presets
{

	/**
	 * @param  [string] $filename 
	 * @param  array    $page_data
	 * @return [bolean] false
	 */
	public function getFile($file,$data = array(""))
	{
		if(empty($file) || !is_file($file))
		{
			return false;
		}
		extract($data);
		include $file;
	}


}