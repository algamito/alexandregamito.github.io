<?php 
require '../config/ini.php';

##### NEW CONTACT #####
if (isset($_POST['new_contact']) && isset($_POST['e']) && isset($_POST['n']) && isset($_POST['c'])) {
	$name = sanitize($_POST['n']);
	$email = sanitize($_POST['e']);
	$comment = sanitize($_POST['c']);

	$re = '';
	if(empty($name) || empty($email) || empty($comment)) {
		$re = 'empty';
	}

	if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
	  	if($re == '') { $re = 'email';}
	}

	if(!empty($name) || !empty($email) || !empty($comment)) {
		$s = "INSERT INTO contact (nome, email, comentario) VALUES('$name', '$email', '$comment')";
		if($q = $db->query($s)) {
			if($re == '') { $re = 'good';}
		}
	}

	echo $re;
}

##### CHECK CONTACT #####
if (isset($_POST['check_contact']) && isset($_POST['t'])) {
	$t = sanitize($_POST['t']);
	
	if($t == 'me') {
		$re = '';
		$s = "SELECT * FROM contact ORDER BY timestamp DESC";
		if ($q = $db->query($s)) {
			$re .= '<ul>';
			while ($r = $q->fetch_object()) {
				$re .= '<li><div>Nome: '.$r->nome.'</div><div>Email: '.$r->email.'</div><div>Comment: '.$r->comentario.'</div><div>When: '.date('dMy', strtotime($r->timestamp)).'</div></li>';
			}
			echo $re.'</ul>';
		}
	}
	
}

?>