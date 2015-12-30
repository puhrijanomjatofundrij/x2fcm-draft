<?php
require_once('config.php');
class xfcm
{
	
	public $request = $_SESSION['REQUESTED_URI'];
	
	public function start()
	{
		require_once('/database/pages.php');
		if (!empty($file)):
			require_once('memory/'.$file.'.php');
		else:
			require_once('memory/404.php');
		endif;
	}
	
}
?>
