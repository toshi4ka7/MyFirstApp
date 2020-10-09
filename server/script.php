<?php 

	if(!empty($_POST)) {

		if ($_POST['key'] == 'write') {
			file_put_contents('text.txt', $_POST['data']);
		}

		if ($_POST['key'] == 'read') {
			echo file_get_contents('text.txt');
		}
	}

 ?>