<?php
if($_POST): // only execute this part, if request type was POST, otherwise we called it via REST
$template = preg_replace("/(TEMPORARY_HELPER)/", "", $template);
include_once("../utils/geshi.php");
$geshi = new GeSHi(trim($template), "html4strict");
$geshi->enable_keyword_links(false);
echo "<div class='snippet'>".$geshi->parse_code()."</div>";

if($warning !== "" || $error !== "") {
	if($error !== "")
		echo "<div class='error'><img src='images/error.png' alt='' style='float:right;padding:6px;'/><p style='font-weight:bold'>$lang_output_error:</p><p>$error</p></div>";
	if($warning !== "") {
		$addition = "";
		if($error == "")
			$addition = "<p>$lang_output_warning_supplement</p>";
		echo "<div class='warning'><img src='images/warning.png' alt='' style='float:right;padding:6px;'/><p style='font-weight:bold'>$lang_output_warning:</p><p>$warning</p>$addition</div>";
	}
}
else {
	switch($template_name) {
		case "company":
			echo "<div class='success'><img src='images/valid.png' alt='' style='float:right;padding:6px;'/><p style='font-weight:bold'>$lang_output_success:</p>$lang_output_success_company</div>";
		break;
		case "shop":
			echo "<div class='success'><img src='images/valid.png' alt='' style='float:right;padding:6px;'/><p style='font-weight:bold'>$lang_output_success:</p>$lang_output_success_shop</div>";
		break;
		case "offer":
			echo "<div class='success'><img src='images/valid.png' alt='' style='float:right;padding:6px;'/><p style='font-weight:bold'>$lang_output_success:</p>$lang_output_success_offer</div>";
	}
	//echo "<div>This RDFa code snippet is accessible under <a href=\"".$dl_button_link."\">this link</a>.</div>";
}
else:
$template = preg_replace("/(TEMPORARY_HELPER)/", "", $template);
header("Content-Type: application/xhtml+xml");
header("Content-Disposition: attachment; filename=\"$template_name\"");
header("Content-Length: ".strlen($template));
header("Cache-Control: private");
echo $template;
endif;

include_once("../utils/log.php");
?>