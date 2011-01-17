<?php
$template_name = "offer";
include('error.template.php');

/* create offering snippet */
$offering = new Resource("#offering", "gr:Offering");
if($page)
	$offering->add_rev("gr:offers", $page);
else
	$offering->add_rev("gr:offers", "#company");
if($product_name)
	$offering->add_property("gr:name", $product_name, null, $lang);
if($description)
	$offering->add_property("gr:description", $description, null, $lang);
if($depiction)
	$offering->add_rel("foaf:depiction", $depiction);
$offering->add_rel("gr:hasBusinessFunction", "http://purl.org/goodrelations/v1#Sell");
if($gtin_13)
	$offering->add_property("gr:hasEAN_UCC-13", $gtin_13, "xsd:string");
$unitpricespec = new Resource(null, "gr:UnitPriceSpecification");
if($currency)
	$unitpricespec->add_property("gr:hasCurrency", $currency, "xsd:string");
if($price)
	$unitpricespec->add_property("gr:hasCurrencyValue", number_format($price, 2, ".", ""), "xsd:float");
$unitpricespec->add_property("gr:hasUnitOfMeasurement", "C62", "xsd:string");
if($currency || $price)
	$offering->add_rel("gr:hasPriceSpecification", $unitpricespec);
if(isset($paymentmethods))
foreach($paymentmethods as $grindividual) {
	$offering->add_rel("gr:acceptedPaymentMethods", "http://purl.org/goodrelations/v1#".$grindividual);
}
if($product_page)
	$offering->add_rel("foaf:page", $product_page);
	
$serializer = new Serializer();
$serializer->set_indent = "";
$serializer->set_indent_spaces = "  ";
$template = $serializer->serialize($offering);
$serializer->destroy();
unset($serializer);

include('output.template.php');
?>
