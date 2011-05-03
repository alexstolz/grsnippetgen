<?php
/* config */
// company, and shop (address)
$lang_conf_legal_name =
	"Legal name of your company";
$lang_conf_country_name =
	"Country";
$lang_conf_locality =
	"City";
$lang_conf_postal_code =
	"Zip code";
$lang_conf_street_address =
	"Street and number";
$lang_conf_tel =
	"Phone number (proposed scheme: +49-0123-456789)";
$lang_conf_company_depiction =
	"URL of a logo or image (e.g. http://www.example.com/image.(jpg|png|gif|svg))";
// shop only
$lang_conf_store_name =
	"Name of store or location";
$lang_conf_store_depiction =
	"URL of a logo or image (e.g. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_latitude =
	"Latitude";
$lang_conf_longitude =
	"Longitude";
$lang_conf_opens_mofr =
	"Opening hours for Monday through Friday (proposed scheme: 08:30)";
$lang_conf_closes_mofr =
	"Closing hours for Monday through Friday (proposed scheme: 16:00)";
$lang_conf_opens_sa =
	"Opening hours for Saturday (proposed scheme: 08:30)";
$lang_conf_closes_sa =
	"Closing hours for Saturday (proposed scheme: 12:00)";
$lang_conf_opens_su =
	"Opening hours for Sunday (proposed scheme: 08:30)";
$lang_conf_closes_su =
	"Closing hours for Sunday (proposed scheme: 12:00)";
$lang_conf_page =
	"Web page describing your company (e.g. http://www.example.com/)";
// offer
$lang_conf_product_name =
	"Name of the product";
$lang_conf_description =
	"Description of the product";
$lang_conf_lang =
	"Language of the description (select language code from <a href=\"http://en.wikipedia.org/wiki/ISO_639-1\">ISO 639-1</a>, e.g. \"en\" or \"de\")";
$lang_conf_product_page =
	"URL of the product detail page (e.g. http://www.example.com/product/)";
$lang_conf_product_depiction =
	"URL of a product image (e.g. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_gtin_13 =
	"EAN-13, 13-digit UPC, or 13-digit ISBN code for the product";
$lang_conf_currency =
	"(select 3-letter <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> currency code, e.g. \"EUR\" or \"USD\", and price for product)";
$lang_conf_price =
	"Price for product";

/* index */
$lang_step = "Step";
$lang_prologue =
	"<h1>Rich Snippet Generator for</h1><div style=\"float:left\"><a href=\"http://purl.org/goodrelations/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logos/gr_banner_small.png\" alt=\"GoodRelations\"/></a></div><div style=\"float:right\"><a href=\"http://www.ebusiness-unibw.org/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logo_researchgroup.png\" alt=\"E-Business and Web Science Research Group\"/></a></div>
	<div style=\"clear:both; padding-bottom: 12px;\"></div>
	<p>GoodRelations is a powerful yet simple technique for putting rich data snippets about your business into your Web pages. This makes the unique features of your products and services more accessible for the latest generation of search engines (e.g. <a href=\"http://www.heppresearch.com/gr4google\">Google</a> or Yahoo SearchMonkey), novel mobile applications, and browser plug-ins. Plus, it brings positive effects on existing search engines.</p>
	<p>With this tool, you can create such snippets using the W3C RDFa format for simple copy-and-paste. Just insert them into your Web pages and update the XHTML/HTML page header markup, as explained <a href=\"#mod_header\">below</a>.</p>
	<p>It will pay out. It's simple. And BestBuy is already doing it with remarkable results.</p>";
$lang_mod_header =
	"Updating the XHTML/HTML page header";
$lang_mod_header_p1 =
	"<p>Once you will have inserted the snippets into the respective pages, you should indicate their existence to crawlers. That is also pretty easy:</p>
	<p>Change the DOCTYPE in the header to \"XHTML+RDFa\": </p>";
$lang_mod_header_p2 =
	"<p>Add a \"xmlns\" attribute with the value \"http://www.w3.org/1999/xhtml\" and a \"version\" attribute with the value \"HTML+RDFa 1.0\" to the &lt;html&gt; element of your document: </p>";
$lang_mod_header_p3 =
	"<p>Check that the &lt;head&gt; element includes the proper content type and encoding for XHTML: </p>";
$lang_mod_header_p4 =
	"<p>With our dedicated notification service we can provide you assistance in publishing your embedded GoodRelations content. There you just have to fill in your page's Web address, afterwards we can automatically take care of the registration of your pages on the Web of Linked Data. This online tool is available <a href=\"http://gr-notify.appspot.com/\">here</a>.</p>";
$lang_additional_resources =
	"Additional resources";
$lang_additional_quickstart =
	"explains the templates used in this tool";
$lang_additional_cookbook =
	"more complex patterns for specific scenarios";
$lang_additional_goodrelations =
	"information about the underlying GoodRelations vocabulary";
$lang_additional_grnotify =
	"notification service for submission of GoodRelations contents to semantic search engines";
$lang_epilogue =
	"<p><strong>Developer:</strong> Alex Stolz</p>
	<p><strong>Disclaimer:</strong> This service is provided by the <a href=\"http://www.unibw.de/ebusiness/\">E-Business and Web Science Research Group</a> at Universität der Bundeswehr München as it is with no explicit or implicit guarantees.</p>";
	
/* controller.inc */
$lang_controller_title =
	"Create rich snippet for ";
$lang_controller_title_company =
	"your company";
$lang_controller_title_shop =
	"your shop or store";
$lang_controller_title_offer =
	"an individual product or service";
$lang_controller_p1_shop =
	"This step is necessary only if you maintain a shop or store location.";
$lang_controller_p1_shop_button =
	"Copy address information from company";
$lang_controller_p1_offer =
	"GoodRelations is most effective if you publish individual data on your products and services. This is of particular relevance for dynamic Web shops with many items.";
$lang_controller_geo_desc =
	"Geo position";
$lang_controller_geo_button =
	"Determine geo position from address";
$lang_controller_select =
	"select ...";
$lang_controller_currency =
	"Currency and price for product";
$lang_controller_category =
	"Product category";
$lang_controller_notify_lang_code =
	"you may enter a custom language code that is not defined in the list";
$lang_controller_notify_currency_code =
	"you may enter a custom currency code that is not defined in the list";
$lang_controller_notify_price =
	"price value";
// payment methods
$lang_controller_paymethod_banktransferinadvance = "bank transfer in advance";
$lang_controller_paymethod_invoice = "invoice";
$lang_controller_paymethod_cash = "cash";
$lang_controller_paymethod_checkinadvance = "check in advance";
$lang_controller_paymethod_cashondelivery = "cash on delivery";
$lang_controller_paymethod_directdebit = "direct debit";
$lang_controller_notify_paymethods =
	"select multiple payment methods (control+click)";
$lang_controller_paymentmethod_title =
	"Payment methods";
$lang_controller_paymentmethod_hint =
	"(see <a href=\"http://purl.org/goodrelations/v1#PaymentMethod\">predefined payment method individuals</a> in GoodRelations)";
$lang_controller_submit_button =
	"Generate Code Snippet";
$lang_controller_allow_logging =
	"Allow anonymous logging of submitted information for research purposes?";
$lang_controller_shop_additional_information =
	"<p>If you would like to provide a more granular description of your opening hours, then you should consider customizing the gr:OpeningHoursSpecification code section according to your needs. See the <a href=\"http://www.ebusiness-unibw.org/wiki/GoodRelationsQuickstart\">GoodRelations Quickstart Guide</a> for details.</p>
	<p>If you have multiple shops, but just one page, simply create and copy the snippet multiple times and replace all ocurrences of the three elements <em>(#store, #mon_fri, and #sat)</em> inside the same snippet by <em>(#store1, #mon_fri1, #sat1)</em>, <em>(#store2, #mon_fri2, #sat2)</em>, etc.</p>";
$lang_controller_offer_additional_information =
	"<p>If you have multiple products within the same web page, simply create and copy the snippet multiple times and replace all ocurrences of the element <em>#offer</em> inside the same snippet by <em>#offer1</em>, <em>#offer2</em>, etc.</p>";

/* error.template */
$lang_error_warning_miss =
	"Missing argument for";
$lang_error_error_depiction =
	"Image URI pattern mismatch in";
$lang_error_error_depiction_desc =
	"Provide correct HTTP scheme and filename, e.g. http://www.example.com/image.(jpg|png|gif|svg)";
$lang_error_error_page =
	"URI pattern mismatch in";
$lang_error_error_page_desc =
	"Provide correct HTTP scheme, e.g. http://www.example.com/";
$lang_error_error_hours =
	"Hour pattern mismatch in";
$lang_error_error_hours_desc =
	"Check if the provided argument matches something similar to 12:00";
$lang_error_error_gtin =
	"Input must consist of digits only at";
$lang_error_error_gtin_desc =
	"At least one disallowed character was found. Please fix to proceed";
$lang_error_error_gtin_len =
	"Number of digits not amounts to 13 for";
$lang_error_error_gtin_len_desc =
	"Please fix to proceed";
$lang_error_error_currency =
	"Number of characters is not 3 for";
$lang_error_error_currency_desc =
	"See <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> for more information. Please fix to proceed";
$lang_error_error_price =
	"Input value is not numeric for";
$lang_error_error_price_desc =
	"Please specify a numeric value, e.g. 12.99";
	
/* output.template */
$lang_output_error =
	"Error(s)";
$lang_output_warning =
	"Warning(s)";
$lang_output_warning_supplement =
	"The snippet will still be valid, but not as useful as possible.";
$lang_output_success =
	"Success";
$lang_output_success_company =
	"<p>Well done!<br/>Now copy the above code snippet and paste it into your <strong>company's web page</strong>, best to be placed right before the closing HTML BODY tag. Then continue with Step 2!</p>";
$lang_output_success_shop =
	"<p>Great!<br/>Proceed like before by copying the above code snippet and pasting it into your <strong>store's web page</strong>. If the store's web page URI is the same as the company's one, then place the snippet within company description and HTML BODY end tag. IMPORTANT: assess whether gr:hasPOS correctly links to your company's web page (e.g. http://www.example.com/#company). If it doesn't, fix it. Then continue with Step 3!</p>";
$lang_output_success_offer =
	"<p>Awesome!<br/>Your offer description passed the validation and is just ready to be published on the <strong>product's web page</strong>. Copy the rich snippet and place it right before the closing HTML BODY tag of your product's web page. The very last thing that remains to be done is the 4th and final step, that is to update the page header of your web site.</p>";
?>