<?php
$template_name = "offer";
include('error.template.php');

/* create offering snippet */
$product_type = "SomeItems";
if(isset($isplaceholder) && !$isplaceholder)
	$product_type = "Individual";
	
$offering = new Resource("#offering", "gr:Offering");
$product = new Resource("#product", "gr:".$product_type);
if(!empty($category) && $category_link) {
	// same as $product->add_rel("rdf:type", $category_link), but more compact
	$product = new Resource("#product", "gr:$product_type pto:".preg_replace("/http:\/\/www\.productontology\.org\/id\//i", "", $category_link));
}
elseif(!empty($category)) {
	$product->add_property("gr:category", $category, null, $lang);
}
if($page)
	$offering->add_rev("gr:offers", $page);
else
	$offering->add_rev("gr:offers", "#company");
if($product_name) {
	$product->add_property("gr:name", $product_name, null, $lang);
	$offering->add_property("gr:name", $product_name, null, $lang);
}
if($description) {
	$product->add_property("gr:description", $description, null, $lang);
	$offering->add_property("gr:description", $description, null, $lang);
}
if($depiction) {
	$product->add_rel("foaf:depiction", $depiction);
	$offering->add_rel("foaf:depiction", $depiction);
}
if($gtin_13) {
	$product->add_property("gr:hasEAN_UCC-13", $gtin_13, "xsd:string");
	$offering->add_property("gr:hasEAN_UCC-13", $gtin_13, "xsd:string");
}
$unitpricespec = new Resource(null, "gr:UnitPriceSpecification");
if($currency)
	$unitpricespec->add_property("gr:hasCurrency", $currency, "xsd:string");
if($price)
	$unitpricespec->add_property("gr:hasCurrencyValue", number_format($price, 2, ".", ""), "xsd:float");
$unitpricespec->add_property("gr:hasUnitOfMeasurement", "C62", "xsd:string");
if($currency || $price)
	$offering->add_rel("gr:hasPriceSpecification", $unitpricespec);
if($validfrom)
	$offering->add_property("gr:validFrom", $validfrom, "xsd:dateTime");
if($validthrough)
	$offering->add_property("gr:validThrough", $validthrough, "xsd:dateTime");
if(isset($businessfunction)) {
	$offering->add_rel("gr:hasBusinessFunction", "http://purl.org/goodrelations/v1#".$businessfunction);
}
else {
	$offering->add_rel("gr:hasBusinessFunction", "http://purl.org/goodrelations/v1#Sell");
}
if(isset($paymentmethods))
foreach($paymentmethods as $grindividual) {
	$offering->add_rel("gr:acceptedPaymentMethods", "http://purl.org/goodrelations/v1#".$grindividual);
}
if(isset($deliverymethods))
foreach($deliverymethods as $grindividual) {
	$offering->add_rel("gr:availableDeliveryMethods", "http://purl.org/goodrelations/v1#".$grindividual);
}
if(isset($customertypes))
foreach($customertypes as $grindividual) {
	$offering->add_rel("gr:eligibleCustomerTypes", "http://purl.org/goodrelations/v1#".$grindividual);
}
if(isset($eligibleregions))
foreach($eligibleregions as $region_id) {
	$offering->add_property("gr:eligibleRegions", $region_id, "xsd:string");
}
if($product_page) {
	$product->add_rel("foaf:page", $product_page);
	$offering->add_rel("foaf:page", $product_page);
}

$offering->add_rel("gr:includes", $product);

$serializer = new Serializer();
if(!empty($category) && $category_link)
	$serializer->add_ns("pto", "http://www.productontology.org/id/");
$serializer->set_indent = "";
$serializer->set_indent_spaces = "  ";
$template = $serializer->serialize($offering);
$serializer->destroy();
unset($serializer);

include('output.template.php');
?>
