<?php
$template_name = "company";
include('error.template.php');

/* create company snippet */
$company = new Resource("#company", "gr:BusinessEntity");
if($legal_name)
	$company->add_property("gr:legalName", $legal_name);
$address = new Resource(null, "vcard:Address");
if($country_name)
	$address->add_property("vcard:country-name", $country_name);
if($locality)
	$address->add_property("vcard:locality", $locality);
if($postal_code)
	$address->add_property("vcard:postal-code", $postal_code);
if($street_address)
	$address->add_property("vcard:street-address", $street_address);
if($country_name || $locality || $postal_code || $street_address)
	$company->add_rel("vcard:adr", $address);
if($tel) {
	$company->add_property("vcard:tel", $tel); // DEPRECATED?
//	$r_tel = new Resource(null, null);
//	$company->add_rel("vcard:tel", $r_tel);
//	$r_tel->add_property("rdf:value", $tel);
//	$r_tel->add_rel("rdf:type", "http://www.w3.org/2006/vcard/ns#Work");
//	$r_tel->add_rel("rdf:type", "http://www.w3.org/2006/vcard/ns#Voice");
}
if($depiction)
	$company->add_rel("foaf:depiction", $depiction);
$company->add_rel("foaf:page", "TEMPORARY_HELPER");

$serializer = new Serializer();
$serializer->add_ns("vcard", "http://www.w3.org/2006/vcard/ns#");
$serializer->set_indent = "";
$serializer->set_indent_spaces = "  ";
$template = $serializer->serialize($company);
$serializer->destroy();
unset($serializer);

include('output.template.php');
?>
