<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
$lang = "en";
$accepted_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if(isset($_GET["lang"]) && file_exists("lang/".$_GET["lang"].".lang.php")) {
	$lang = $_GET["lang"];
}
else if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && file_exists("lang/$accepted_lang.lang.php")) {
	$lang = $accepted_lang;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang ?>" lang="<?php echo $lang ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>GoodRelations Snippet Generator</title>
	<meta name="description" lang="en" content="With this tool, you can create rich data snippets using the W3C RDFa format for simple copy-and-paste. Just insert them into your Web pages and update the XHTML/HTML page header markup." />
	<meta name="description" lang="de" content="Mit dem vorliegenden Tool können Sie sich sogenannte Code Snippets oder Codefragmente im W3C RDFa Format generieren lassen, die sich dann einfach per Copy-and-Paste in Ihre Webseite einbetten lassen. Es muss lediglich das Markup im XHTML/HTML Header leicht modifiziert werden." />
	<meta name="keywords" content="rich snippet, rdfa, seo, linked data, goodrelations, bestbuy, google, searchmonkey, yahoo, sem, rdf, owl, rdf-s, e-commerce, semantic web" />
	<meta name="author" content="Alex Stolz, Martin Hepp" />
	<meta name="publisher" content="Martin Hepp" />
	<meta name="robots" content="index, nofollow" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script type="text/javascript" src="scripts/load.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="scripts/forms.js"></script>
</head>
<body>
	<?php
	define("APP_ID","8923466734337662");
	$i=1;
	include_once("utils/geshi.php");
	include_once("lang/$lang.lang.php");
	?>
	<div id="prologue">
		<?php echo $lang_prologue ?>
		<div style="float:right;font-size:12px"><a href="en" style="text-decoration:<?php echo $lang=="en"?"none":"underline" ?>">en</a>&nbsp;<a href="de" style="text-decoration:<?php echo $lang=="de"?"none":"underline" ?>">de</a></div>
	</div>
	<?php
	include('company.php');
	include('shop.php');
	include('offer.php');
	?>
	<h2 id="mod_header"><?php echo $lang_step." ".$i++.": ".$lang_mod_header ?></h2>
	<?php echo $lang_mod_header_p1 ?>
	<div class="pre_static"><?php
	$geshi = new GeSHi('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">', "html4strict");
	$geshi->enable_keyword_links(false);
	echo $geshi->parse_code();
	?></div>
	<?php echo $lang_mod_header_p2 ?>
	<div class="pre_static"><?php
	$geshi->set_source('<html xmlns="http://www.w3.org/1999/xhtml" version="XHTML+RDFa 1.0" xml:lang="en">');
	echo $geshi->parse_code();
	?></div>
	<?php echo $lang_mod_header_p3 ?>
	<div class="pre_static"><?php
	$geshi->set_source('<head>
    <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8"/>
    <title>Your page title blabla...</title>
</head>');
	echo $geshi->parse_code();
	?></div>
	<?php echo $lang_mod_header_p4 ?>
	<h2><?php echo $lang_additional_resources ?></h2>
	<p><a href="http://www.ebusiness-unibw.org/wiki/GoodRelationsQuickstart">GoodRelations Quickstart Guide</a> - <?php echo $lang_additional_quickstart ?></p>
	<p><a href="http://www.ebusiness-unibw.org/wiki/GoodRelations#CookBook:_GoodRelations_Recipes_and_Examples">GoodRelations CookBook</a> - <?php echo $lang_additional_cookbook ?></p>
	<p><a href="http://purl.org/goodrelations/">GoodRelations Project Page</a> - <?php echo $lang_additional_goodrelations ?></p>
	<p><a href="http://gr-notify.appspot.com/">GoodRelations Notify</a> - <?php echo $lang_additional_grnotify ?></p>
	<div><img class="nodisp" src="images/load.gif" alt="" /></div>
	<div><img class="nodisp" src="images/valid.png" alt="" /></div>
	<div><img class="nodisp" src="images/warning.png" alt="" /></div>
	<div><img class="nodisp" src="images/error.png" alt="" /></div>
	<div id="epilogue">
		<?php echo $lang_epilogue ?>
	</div>
</body>
</html>