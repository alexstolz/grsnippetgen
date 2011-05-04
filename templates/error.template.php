<?php
$error = "";
$warning = "";
$lang = "en";
$accepted_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(isset($_POST[$template_name."_langcode"]))
	if(file_exists("../lang/".$_POST[$template_name."_langcode"].".lang.php")) {
		$lang = $_POST[$template_name."_langcode"];
		include_once("../lang/".$_POST[$template_name."_langcode"].".lang.php");
	}
	else
		include_once("../lang/en.lang.php");
else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && file_exists("../lang/$accepted_lang.lang.php")) {
	$lang = $accepted_lang;
	include_once("../lang/$accepted_lang.lang.php");
}
else
	include_once("../lang/en.lang.php");
	
$dl_button_link = "templates/".$template_name.".template.php?";
$arr = $_POST?$_POST:$_GET;
function info($k, $v) {
	global $template_name;
	$template_name_tmp = $template_name;
	if($template_name_tmp=="offer" && $k=="page")
		$template_name_tmp = "shop";
	if($v=="")
		$v = "empty";
	return "<a href=\"#".$template_name_tmp."_$k\" title=\"$v\">$k</a>";
}

//print_r($arr);
foreach($arr as $key=>$value) {
	$key = preg_replace("/(".$template_name."_)/i", "", $key);
	if(is_array($value)){
		${$key} = $value;
		continue;
	}
	$value = trim($value);
	if($value=="") {
		if(!preg_match("/(opens_su|closes_su)/i", $key)) // do not consider sunday opening hours for warnings
			$warning .= $lang_error_warning_miss." ".info($key, $value)." ...<br/>";
		continue;
	}
	switch($key) {
		case "depiction":
			if(!preg_match("/(https?|ftp):\/\/(.*)\.(jpg|png|gif|svg)/i", $value))
				$error .= $lang_error_error_depiction." ".info($key, $value).": $lang_error_error_depiction_desc ...<br/>";
			break;
		case "page":
			$value = $value!=""?$value."#company":"";
		case "product_page":
			if(!preg_match("/http/i", $value))
				$error .= $lang_error_error_page." ".info($key, $value).": $lang_error_error_page_desc ...<br/>";
			break;
		case "opens_mofr":
		case "closes_mofr":
		case "opens_sa":
		case "closes_sa":
		case "opens_su":
		case "closes_su":
			if(!preg_match("/^[0-9]{2}:[0-9]{2}$/", $value))
				$error .= $lang_error_error_hours." ".info($key, $value).": $lang_error_error_hours_desc ...<br/>";
			break;
		case "gtin_13":
			if(!preg_match("/^[0-9]{13}$/", $value))
				if(!is_numeric($value))
					$error .= $lang_error_error_gtin." ".info($key, $value).": $lang_error_error_gtin_desc ...<br/>";
				else
					$error .= $lang_error_error_gtin_len." ".info($key, $value)." (".strlen($value)."!=13): $lang_error_error_gtin_len_desc ...<br/>";
			break;
		case "currency":
			if(!preg_match("/^[\w]{3}$/i", $value))
				$error .= $lang_error_error_currency." ".info($key, $value).": $lang_error_error_currency_desc ...<br/>";
			break;
		case "latitude":
		case "longitude":
		case "price":
			$value = (float)preg_replace("/,/", ".", $value);
			if(!is_numeric($value))
				$error .= $lang_error_error_price." ".info($key, $value).": $lang_error_error_price_desc ...<br/>";
			break;
	}
	${$key} = htmlspecialchars(str_replace(array("\\\"", "\\'"), array("\"", "'"), $value), ENT_QUOTES, "UTF-8");
	$dl_button_link .= urlencode($key)."=".urlencode($value)."&amp;";
}
require_once("../utils/rdfaizer.php");
?>