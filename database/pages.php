<?php
if (defined('INGRESS')):
	switch ($request):
		case '/':
			$file = 'index';
		break;
		case '/posts':
			$file = 'posts';
		break;
		default:
			$file = NULL;
		break;
	endswitch;
else:
	header('Location: 404');
endif;
?>
