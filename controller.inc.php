<?php if(!defined("APP_ID") || constant("APP_ID")!="8923466734337662"): ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
	<script type="text/javascript" src="scripts/load.js"></script>
	<title>GoodRelations Snippet Generator</title>
</head>
<body>
<?php
include_once("utils/geshi.php");
$lang = "en";
$accepted_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(isset($_GET["lang"]))
	if(file_exists("lang/".$_GET["lang"].".lang.php")) {
		$lang = $_GET["lang"];
		include_once("lang/".$_GET["lang"].".lang.php");
	}
	else
		include_once("lang/en.lang.php");
else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && file_exists("lang/$accepted_lang.lang.php")) {
	$lang = $accepted_lang;
	include_once("lang/$accepted_lang.lang.php");
}
else
	include_once("lang/en.lang.php");

endif;

if($template_type == '')
	$template_type = 'company';
?>
	<h2><?php echo (isset($i)?$lang_step." ".$i++.": ":"").$lang_controller_title ?><?php
	switch($template_type) {
		case "company":
			echo $lang_controller_title_company;
		break;
		case "shop":
			echo $lang_controller_title_shop;
		break;
		case "offer":
			echo $lang_controller_title_offer;
	}
	?></h2>
	<?php if($template_type=="shop"): ?>
	<p><em><?php echo $lang_controller_p1_shop ?></em><br/><input type="button" value="<?php echo $lang_controller_p1_shop_button ?>" onclick="javascript:fill_vcard()" style="margin-top:6px;" /></p>
	<?php elseif($template_type=="offer"): ?>
	<p><em><?php echo $lang_controller_p1_offer ?></em></p>
	<?php endif ?>
	<form id="<?php echo $template_type ?>_master" action="">
	<table style="width:100%;border:0;" cellspacing="3px;">
	<?php
	include_once('config/'.$template_type.'.conf.php');
	foreach($config as $token1=>$token2) {
		$token2 = preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $token2);
		/*special cases with geo, language codes, payment methods*/
		/* geo position */
		if($token1=="latitude" || $token1=="longitude") {
			if($token1=="latitude") {
				echo "<tr><td style=\"width:480px\">$lang_controller_geo_desc <input type=\"button\" value=\"$lang_controller_geo_button\" onclick=\"javascript:codeAddress()\" /></td>";
				echo "<td style=\"width:480px\">";
			}
	?>
		<?php echo $token2 ?> (<input style="width:100px" id="<?php echo $template_type."_".$token1 ?>" type="text" />)&nbsp;&nbsp;
	<?php
			if($token1=="longitude") {
				echo "</td></tr>\n";
			}
			if(preg_match("/longitude/i", $token1))
				echo "<tr><td><span id=\"geo_string\"></span></td><td><div id=\"map_canvas\" style=\"width:480px; height:0px;\"></div></td></tr>";
			continue;
		}
		/* language codes */
		if($token1=="lang") {
	?>
		<tr><td style="width:480px"><?php echo $token2 ?></td><td><select style="width:100px" onchange="document.getElementById('<?php echo $template_type."_".$token1 ?>').value=this.options[this.selectedIndex].value; document.getElementById('<?php echo $template_type."_".$token1 ?>').disabled=this.selectedIndex!=0"><option value=""><?php echo $lang_controller_select ?></option><option value="de">de</option><option value="en">en</option><option value="es">es</option><option value="fr">fr</option><option value="it">it</option></select>&nbsp;&nbsp;<input style="width:100px" id="<?php echo $template_type."_".$token1 ?>" type="text" title="<?php echo $lang_controller_notify_lang_code ?>" /></td></tr>
	<?php
			continue;
		}
		/* currencies */
		if($token1=="currency") {
	?>
		<tr><td style="width:480px"><?php echo $lang_controller_currency ?> <?php echo $token2 ?></td><td><select style="width:100px" onchange="document.getElementById('<?php echo $template_type."_".$token1 ?>').value=this.options[this.selectedIndex].value; document.getElementById('<?php echo $template_type."_".$token1 ?>').disabled=this.selectedIndex!=0"><option value=""><?php echo $lang_controller_select ?></option><option value="USD">USD ($)</option><option value="EUR">EUR (€)</option><option value="GBP">GBP (£)</option><option value="JPY">JPY (¥)</option><option value="CHF">CHF (SFr.)</option></select>&nbsp;&nbsp;<input style="width:100px" id="<?php echo $template_type."_".$token1 ?>" type="text" title="<?php echo $lang_controller_notify_currency_code ?>" />
	<?php
			continue;
		}
		if($token1=="price") {
	?>
		<input style="width:100px" id="<?php echo $template_type."_".$token1 ?>" type="text" title="<?php echo $lang_controller_notify_price ?>" /></td></tr>
	<?php
			continue;
		}
		/* default */
	?>
		<tr><td style="width:480px"><?php echo $token2 ?></td><td><input style="width:480px" id="<?php echo $template_type."_".$token1 ?>" type="text" /></td></tr>
	<?php
	}
	/* payment methods */
	if($template_type=="offer"):
	$paymentmethods = array(
		"ByBankTransferInAdvance"	=>	$lang_controller_paymethod_banktransferinadvance,
		"ByInvoice"					=>	$lang_controller_paymethod_invoice,
		"Cash"						=>	$lang_controller_paymethod_cash,
		"CheckInAdvance"			=>	$lang_controller_paymethod_checkinadvance,
		"COD"						=>	$lang_controller_paymethod_cashondelivery,
		"DirectDebit"				=>	$lang_controller_paymethod_directdebit,
		"PayPal"					=>	"PayPal",
		"AmericanExpress"			=>	"American Express",
		"DinersClub"				=>	"DinersClub",
		"Discover"					=>	"Discover",
		"MasterCard"				=>	"MasterCard",
		"VISA"						=>	"VISA");
	?>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_paymentmethod_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_paymentmethod_hint) ?></td>
			<td><select name="paymentmethods[]" size="6" style="width:200px" multiple="multiple" title="<?php echo $lang_controller_notify_paymethods ?>"><?php
			foreach ($paymentmethods as $grindividual=>$desc) {
				echo "<option value=\"".$grindividual."\">$desc</option>\n";
			}
			?></select><input id="offer_page" type="hidden" value="" /></td>
		</tr>
	<?php
	endif;
	?>
	</table>
	<p><input type="checkbox" id="<?php echo $template_type ?>_logging_allowed" checked="checked" value="true" onclick="javascript:swap_logging(this.id)" /><span style="font-size:11px;color:#666;"><?php echo $lang_controller_allow_logging ?></span>
	</p>
	<p><input id="<?php echo $template_type ?>_langcode" type="hidden" value="<?php echo $lang ?>" /><input id="<?php echo $template_type ?>_button" type="button" value="<?php echo $lang_controller_submit_button ?>" onclick="javascript:reload('<?php echo $template_type ?>')<?php echo ($template_type=="shop"?";document.getElementById('offer_page').value=document.getElementById('shop_page').value":"") ?>" /></p>
	</form>
	<div id="<?php echo $template_type ?>_snippet" class="pre"></div>
<?php
if(!defined("APP_ID") || constant("APP_ID")!="8923466734337662") { ?>
</body>
</html>
<?php
}
else {
	switch($template_type) {
		case "company":
			echo "";
		break;
		case "shop":
			echo $lang_controller_shop_additional_information;
		break;
		case "offer":
			echo $lang_controller_offer_additional_information;
	}
}
?>