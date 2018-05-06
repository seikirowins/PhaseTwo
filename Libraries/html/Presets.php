<?php
namespace html;

class Presets
{

	private $page_title;
	private $meta_tags;


	public function set_title($title)
	{
		$this->page_title = $title;
	}

	public function get_title()
	{
		if(isset($this->page_title))
		{
			return $this->page_title;
		}
	}

	

	public function createNavigation($navigation,$type='link')
	{
		
			foreach($navigation as $link => $label)
			{
				switch($type)
				{
				 case 'link':
				 echo "<li class='nav-item'><a class='nav-link' href='$link'>$label</a></li>\n";
				 break;
				 case 'modal':
				 echo "<li class='nav-item' ><a class='nav-link' data-toggle='modal' data-target='$link' href='#'>$label</a></li>\n";
				}
			}
		
	}


	public function Modal(array $data)
	{
		if(!is_array($data) || !isset($data))
		{
			return false;
		}
		extract($data);
		include "pages/preset/modal/modal_design.php";

	}


	public function Month()
	{
		$months = array(
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December"
		);

		foreach($months as $month)
		{
			echo "<option value='$month'>$month</option>\n";
		}
	}

	public function Day()
	{
		for($i = 0; $i <= 6; $i++)
		{
			echo "<option value='$i'>" . date("l",$i) . "</option>\n";
		}
	}


	public function Year($min)
	{
		for($i = date('Y'); $i >= $min; $i--)
		{
			echo "<option value='$i'>$i</option>\n";
		}
	}

	
	

}