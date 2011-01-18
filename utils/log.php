<?php
/*
 * usage log
 */

function getIP() {
	if(!empty($_SERVER['HTTP_CLIENT_IP'])) // internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
    elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) // proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
		$ip = $_SERVER['REMOTE_ADDR'];
    return $ip;
}

function recursive_implode($glue, $pieces) {
	foreach($pieces as $r_pieces) {
		if(is_array($r_pieces))
			$ret[] = recursive_implode($glue, $r_pieces);
		else
			$ret[] = $r_pieces;
	}
	return "{".implode($glue, $ret)."}";
}

$ip = getIP();
$logging_allowed = $_POST[$template_name.'_logging_allowed'];

$row = "";
$row .= date("Y-m-d\TH:i:s\Z") ."\t";

// if($logging_allowed=="true")
$row .= (strpos($ip, ".")>0?substr($ip, 0, strrpos($ip, ".")+1)."XXX":"user_ip_not_recognized") ."\t";
// else $row .= "not_logged\t";

$row .= $template_name ."\t";//. $_SERVER['PHP_SELF'] ."\t";

if($logging_allowed=="true") $row .= recursive_implode(",", str_replace(",", "\,", $_POST));
else $row .= "input_not_logged";

if($row != "") {
	$row .= "\n";
	$fh = fopen("../log/".date("Y-m").".log", "a");
	fwrite($fh, $row);
	fclose($fh);
}
?>