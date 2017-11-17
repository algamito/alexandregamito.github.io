<?php 

$q = "SELECT * FROM activities";
if ($s = $db->query($q)) {
	$pl = '';
	while ($r = $s->fetch_object()) {
		$pl .= '<div><span class="label">subu - '.$r->subu_id.'</span></div>';
		$pl .= '<div><span class="label">group_id - '.$r->group_id.'</span></div>';
		$pl .= '<div><span class="label">unit_type_id - '.$r->unit_type_id.'</span></div>';
	}
}


?>