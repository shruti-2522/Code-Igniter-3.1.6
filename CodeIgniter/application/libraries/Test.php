<?php

class Test
{

	public function showDetails()
	{
		$ci=&get_instance();
		$ci->load->helper('array');
		echo "Example of Library"."<br>";
	}
}

?>