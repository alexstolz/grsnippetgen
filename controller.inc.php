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
		/* validfrom */
		if($token1=="validfrom") {
	?>
		<tr><td style="width:480px"><?php echo $token2 ?></td><td><input style="width:200px" id="<?php echo $template_type."_".$token1 ?>" type="text" /></td></tr>
	<?php
			continue;
		}
		/* validthrough */
		if($token1=="validthrough") {
	?>
		<tr><td style="width:480px"><?php echo $token2 ?></td><td><input style="width:200px" id="<?php echo $template_type."_".$token1 ?>" type="text" /></td></tr>
	<?php
			continue;
		}
		/* category */
		if($token1=="category") {
	?>
		<tr><td style="width:480px"><?php echo $lang_controller_category ?></td><td><input style="width:480px" id="<?php echo $template_type."_".$token1 ?>" type="text" /><input type="hidden" id="<?php echo $template_type."_category_link" ?>" /><div id="pto_link"></div></td></tr>
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
	if($template_type=="offer"):
	/* business function*/
	$businessfunctions = array(
		"Sell"						=>	$lang_controller_busfun_sell,
		"LeaseOut"					=>	$lang_controller_busfun_leaseout,
		"Repair"					=>	$lang_controller_busfun_repair,
		"Maintain"					=>	$lang_controller_busfun_maintain,
		"ConstructionInstallation"	=>	$lang_controller_busfun_constructioninstallation,
		"ProvideService"			=>	$lang_controller_busfun_provideservice,
		"Dispose"					=>	$lang_controller_busfun_dispose
		);
	?>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_businessfunction_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_businessfunction_hint) ?></td>
			<td><select id="businessfunction" title="<?php echo $lang_controller_notify_businessfunction ?>"><?php
			foreach ($businessfunctions as $grindividual=>$desc) {
				echo "<option value=\"".$grindividual."\">$desc</option>\n";
			}
			?></select></td>
		</tr>
	<?php
	/* payment methods */
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
			<td><select name="paymentmethods[]" size="5" style="width:200px" multiple="multiple" title="<?php echo $lang_controller_notify_paymethods ?>"><?php
			foreach ($paymentmethods as $grindividual=>$desc) {
				echo "<option value=\"".$grindividual."\">$desc</option>\n";
			}
			?></select><input id="offer_page" type="hidden" value="" /></td>
		</tr>
	<?php
	/* delivery methods */
	$deliverymethods = array(
		"DeliveryModeDirectDownload"	=>	$lang_controller_deliverymethod_directdownload,
		"DeliveryModeFreight"			=>	$lang_controller_deliverymethod_freight,
		"DeliveryModeMail"				=>	$lang_controller_deliverymethod_mail,
		"DeliveryModeOwnFleet"			=>	$lang_controller_deliverymethod_ownfleet,
		"DeliveryModePickUp"			=>	$lang_controller_deliverymethod_pickup,
		"DHL"							=>	"DHL",
		"FederalExpress"				=>	"Federal Express",
		"UPS"							=>	"UPS");
	?>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_deliverymethod_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_deliverymethod_hint) ?></td>
			<td><select name="deliverymethods[]" size="5" style="width:200px" multiple="multiple" title="<?php echo $lang_controller_notify_deliverymethods ?>"><?php
			foreach ($deliverymethods as $grindividual=>$desc) {
				echo "<option value=\"".$grindividual."\">$desc</option>\n";
			}
			?></select></td>
		</tr>
	<?php
	/* eligible regions */
	?>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_eligibleregion_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_eligibleregion_hint) ?></td>
			<td><select name="eligibleregions[]" id="eligibleregions" size="5" style="width:200px" multiple="multiple" title="<?php echo $lang_controller_notify_eligibleregions ?>">
				<option value="AF">Afghanistan</option><option value="AX">&#197;land Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua and Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia and Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">C&#244;te D&#39;Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island and Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People&#39;s Republic of</option><option value="KR">Korea, Republic of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People&#39;s Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States of</option><option value="MD">Moldova, Republic of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">R&#233;union</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barth&#233;lemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts and Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre and Miquelon</option><option value="VC">Saint Vincent and The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome and Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia and The South Sandwich Islands</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard and Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan, Province of China</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic of</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad and Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks and Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US">United States</option><option value="UM">United States Minor Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis and Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
			</select></td>
		</tr>
	<?php
	/* eligible customer types */
	$customertypes = array(
		"Enduser"				=>	$lang_controller_customer_enduser,
		"Business"				=>	$lang_controller_customer_business,
		"PublicInstitution"		=>	$lang_controller_customer_public,
		"Reseller"				=>	$lang_controller_customer_reseller);
	?>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_customertype_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_customertype_hint) ?></td>
			<td><select name="customertypes[]" size="3" style="width:200px" multiple="multiple" title="<?php echo $lang_controller_notify_customertypes ?>"><?php
			foreach ($customertypes as $grindividual=>$desc) {
				echo "<option value=\"".$grindividual."\">$desc</option>\n";
			}
			?></select></td>
		</tr>
		<tr>
			<td style="width:480px"><?php echo $lang_controller_prodtype_title ?> <?php echo preg_replace("/\((.+)\)/i", "<span style=\"font-size:11px;color:#666;\">$1</span>", $lang_controller_prodtype_hint) ?></td>
			<td><input type="checkbox" id="<?php echo $template_type ?>_isplaceholder" checked="checked" value="1" onclick="this.value=(parseInt(this.value)+1)%2" /></td>
		</tr>
	<?php
	endif; // endif template type is offer
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