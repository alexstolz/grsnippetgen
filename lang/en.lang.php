<?php
/* slider */
$lang_slider_slide_label = "Slide";
$lang_slider_slide1_title = "Quickstart: One store with one offer";
$lang_slider_slide2_title = "Two stores on separate pages (offers omitted)";
$lang_slider_slide3_title = "Two stores on the same page (offer omitted)";
$lang_slider_slide4_title = "Two offers on separate pages";
$lang_slider_slide5_title = "Two offers on the same page";
$lang_slider_slide1_text = 
	"<p>The company ACME Inc. owns a website hosted at http://www.acme.com/. Its web shop is published under a subdomain http://store.acme.com/, wherein the company offers the product as available at http://store.acme.com/product/.</p>
<p>The RDFa code for the company ACME Inc. should be embedded into http://www.acme.com/ directly or, what would also be fine, into the \"about\"-page of the company. Afterwards, the company can be addressed by any Semantic Web application or search engine via http://www.acme.com/#company. The URI consists of the representative URL of the company (http://www.acme.com/) and the Semantic Web identifier (#company) that is defined locally on the company's web page (and hence dereferencable by any agent).</p>
<p>The same proceeding applies to the resources for shop and offering. Their addresses for the Semantic Web are http://store.acme.com/#store and http://store.acme.com/product/#offer, respectively. The rev-links in their RDFa codes relate them (the shop URI and the offer URI) to the company URI, i.e. rev is an inverse relationship between company and shop (gr:hasPOS) and company and offer (gr:offers), respectively.</p>";
$lang_slider_slide2_text = 
	"<p>Two stores instead of one tied to a company can be modeled with ease in GoodRelations.</p>
<p>This example shows how two stores available at different locations (here under different subdomains) can be defined.</p>
<p>The user has just to fill in the forms for the shop/store and provide the correct subdomain URL for each of them. The locations for the publication of the RDFa snippets are supposed to be http://store1.acme.com/ and http://store2.acme.com/, respectively. Their inverse property gr:hasPOS should in both cases correctly point at http://www.acme.com/#company.</p>";
$lang_slider_slide3_text = 
	"<p>This example shows how two store resources can be published on the same page.</p>
<p>If two shops of a company share the same web page, they can and should be published under one common URL, i.e. two RDFa snippets have to be generated (one for each shop) and pasted into the page http://stores.acme.com/. To avoid clashes between the two URIs, the identifiers have to be named differently, i.e. #store1 and #store2. This cannot be fulfilled by the tool and should be done manually instead. Just replace one #store by #store1 and the other #store by #store2 or similar.</p>";
$lang_slider_slide4_text = 
	"<p>This example shows how two offers instead of one can be tied to one company. It is basically the same procedure as already described in the example on slide 2.</p>
    <p>Suppose the shop located at http://store.acme.com/ is offering multiple offers. For the sake of simplicity, we show the example with two offers only. Each product offered by the shop has got a unique product URL. Now generate for each offer an RDFa snippet and embed it into the respective pages (http://store.acme.com/product1/ and http://store.acme.com/product2/). The offers will link back (via \"rev gr:offers\") to the company which offers the products. The offering resources for the Semantic Web are dereferencable via http://store.acme.com/product1/#offer and http://store.acme.com/product2/#offer, respectively.</p>";
$lang_slider_slide5_text = 
	"<p>This final example describes the case where two offers share the same publication URL.</p>
<p>Similar as in the web shop scenario, it is imaginable that two offers are accessible under the same location on a website. Then they share the same URL and need Semantic Web identifiers that make them distinguishable.</p>
<p>Suppose the product URL is http://store.acme.com/products/, then the URIs for the offers are http://store.acme.com/products/#offer1 and http://store.acme.com/products/#offer2. The output of the snippet generator tool doesn't craft such unique identifiers, hence it is up to the user to rename #offer by #offer1, #offer2, ... or similar.</p>";
/* config */
$lang_fillin = "This box is highly recommended to fill in";
$mandatory_field = "<span class=\"mandatory\" title=\"$lang_fillin\">*</span>";
// company, and shop (address)
$lang_conf_legal_name =
	$mandatory_field."Legal name of your company";
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
	$mandatory_field."Name of store or location";
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
	$mandatory_field."Web page describing your company (shop and offers will point to this URL, e.g. http://www.example.com/)";
// offer
$lang_conf_product_name =
	$mandatory_field."Name of the product";
$lang_conf_description =
	"Description of the product";
$lang_conf_lang =
	"Language of the description (<br />select language code from <a href=\"http://en.wikipedia.org/wiki/ISO_639-1\">ISO 639-1</a>, e.g. \"en\" or \"de\")";
$lang_conf_product_page =
	"URL of the product detail page (e.g. http://www.example.com/product/)";
$lang_conf_product_depiction =
	"URL of a product image (e.g. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_gtin_13 =
	"EAN-13, 13-digit UPC, or 13-digit ISBN code for the product";
$lang_conf_currency =
	"(<br />select 3-letter <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> currency code, e.g. \"EUR\" or \"USD\", and price for product)";
$lang_conf_price =
	"Price for product";
$lang_conf_validfrom =
	"<strong>Validity start</strong> of product offering (date format ".date("d.m.Y\T00:00:00\Z").")";
$lang_conf_validthrough =
	"<strong>Validity end</strong> of product offering (date format ".date("d.m.Y\T23:59:00\Z", mktime(0, 0, 0, date("m"), date("d"), date("Y")+1)).")";

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
	<p>You can use GoodRelations in RDFa in XHTML, HTML5, and HTML4 templates, despite the different state of the standardization of respective DOCTYPEs.</p>";
$lang_mod_header_xhtml =
	"XHTML";
$lang_mod_header_xhtml_li1 =
	"Set DOCTYPE to XHTML+RDFa 1.0:";
$lang_mod_header_xhtml_li2 =
	"Set html version attribute to XHTML+RDFa1.0:";
$lang_mod_header_xhtml_li3 =
	"Check that the &lt;head&gt; element includes the proper content type and encoding for XHTML:";
$lang_mod_header_html5 =
	"HTML5";
$lang_mod_header_html5_li1 =
	"Set DOCTYPE to html:";
$lang_mod_header_html5_li2 =
	"Set html version attribute to HTML+RDFa1.1";
$lang_mod_header_html =
	"Other HTML markup";
$lang_mod_header_html_li1 =
	"Either use HTML5 recipe or simply set the html version attribute to HTML+RDFa1.1 or XHTML+RDFa1.0. Most clients will extract RDF from this type. Either";
$lang_mod_header_html_li2 =
	"or";
$lang_mod_header_p2 =
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
$lang_sourcecode_title =
    "Source Code";
$lang_sourcecode_content =
    "The source code of this tool is available under a LPGL license from <a href=\"http://code.google.com/p/grsnippetgen/\">http://code.google.com/p/grsnippetgen/</a>.";
$lang_acknowledgements_title =
    "Acknowledgements";
$lang_acknowledgements_content =
    "Thanks to Özer Kavak who contributed translations to this project.";
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
// is placeholder or actual product or service
$lang_controller_prodtype_title = "Anonymous product (e.g. multiple article items for sale)";
$lang_controller_prodtype_hint = "(<br />do not cross if offering a certain, maybe used article)";
// delivery methods
$lang_controller_deliverymethod_directdownload = "Direct download";
$lang_controller_deliverymethod_freight = "Freight";
$lang_controller_deliverymethod_mail = "Mail";
$lang_controller_deliverymethod_ownfleet = "Own fleet";
$lang_controller_deliverymethod_pickup = "Pick up";
$lang_controller_notify_deliverymethods = "select applicable delivery modes (control+click)";
$lang_controller_deliverymethod_title = "Delivery methods";
$lang_controller_deliverymethod_hint = "(<br />see <a href=\"http://purl.org/goodrelations/v1#DeliveryMethod\">predefined delivery methods individuals</a> in GoodRelations)";
// business functions
$lang_controller_busfun_constructioninstallation = "Construction/Installation";
$lang_controller_busfun_dispose = "Dispose";
$lang_controller_busfun_leaseout = "Lease out";
$lang_controller_busfun_maintain = "Maintain";
$lang_controller_busfun_provideservice = "Provide service";
$lang_controller_busfun_repair = "Repair";
$lang_controller_busfun_sell = "Sell";
$lang_controller_notify_businessfunction = "select a business function for the product";
$lang_controller_businessfunction_title = "Business function";
$lang_controller_businessfunction_hint = "(<br />see <a href=\"http://purl.org/goodrelations/v1#BusinessFunction\">predefined business function individuals</a> in GoodRelations)";
// payment methods
$lang_controller_paymethod_banktransferinadvance = "Bank transfer in advance";
$lang_controller_paymethod_invoice = "Invoice";
$lang_controller_paymethod_cash = "Cash";
$lang_controller_paymethod_checkinadvance = "Check in advance";
$lang_controller_paymethod_cashondelivery = "Cash on delivery";
$lang_controller_paymethod_directdebit = "Direct debit";
$lang_controller_notify_paymethods =
	"select multiple payment methods (control+click)";
$lang_controller_paymentmethod_title =
	"Payment methods";
$lang_controller_paymentmethod_hint =
	"(<br />see <a href=\"http://purl.org/goodrelations/v1#PaymentMethod\">predefined payment method individuals</a> in GoodRelations)";
// customer types
$lang_controller_customer_enduser = "End user";
$lang_controller_customer_business = "Business";
$lang_controller_customer_public = "Public institution";
$lang_controller_customer_reseller = "Reseller";
$lang_controller_notify_customertypes =
	"select multiple business partners (control+click)";
$lang_controller_customertype_title =
	"Business partners";
$lang_controller_customertype_hint =
	"(<br />see <a href=\"http://purl.org/goodrelations/v1#BusinessEntityType\">predefined business partner individuals</a> in GoodRelations)";
// eligible regions
$lang_controller_notify_eligibleregions =
	"select multiple regions for which the offer is valid (control+click)";
$lang_controller_eligibleregion_title =
	"Eligible regions";
$lang_controller_eligibleregion_hint =
	"(<br /><a href=\"#\" id=\"selectA_CH_D\">select A, CH and D</a><br /><a href=\"#\" id=\"selectEU\">select EU member states</a><br /><a href=\"#\" id=\"selectNone\">deselect all</a>)";

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
$lang_error_error_validity =
	"Date format is not valid for";
$lang_error_error_validity_desc =
	"Please provide a valid date format like e.g. 2008-05-30T09:30:10Z";
	
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
	"<p>Great!<br/>Proceed like before by copying the above code snippet and pasting it into your <strong>store's web page</strong>. If the store's URL is equal to the company's one, then place the snippet within company description and HTML BODY end tag. IMPORTANT: assess whether gr:hasPOS correctly links to your company's web page (e.g. http://www.example.com/#company). If it doesn't, fix it. Then continue with Step 3!</p>";
$lang_output_success_offer =
	"<p>Awesome!<br/>Your offer description passed the validation and is just ready to be published on the <strong>product's web page</strong>. Copy the rich snippet and place it right before the closing HTML BODY tag of your product's web page. The very last thing that remains to be done is the 4th and final step, that is to update the page header of your web site.</p>";
?>