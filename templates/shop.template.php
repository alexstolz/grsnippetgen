<?php
$template_name = "shop";
include('error.template.php');

/* create shop snippet */
$shop = new Resource("#store", "gr:Location");
if($page)
	$shop->add_rev("gr:hasPOS", $page);
else
	$shop->add_rev("gr:hasPOS", "#company");
if($store_name)
	$shop->add_property("gr:name", $store_name);
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
	$shop->add_rel("vcard:adr", $address);
if($tel) {
	$shop->add_property("vcard:tel", $tel); // DEPRECATED?
//	$r_tel = new Resource(null, null);
//	$shop->add_rel("vcard:tel", $r_tel);
//	$r_tel->add_property("rdf:value", $tel);
//	$r_tel->add_rel("rdf:type", "http://www.w3.org/2006/vcard/ns#Work");
//	$r_tel->add_rel("rdf:type", "http://www.w3.org/2006/vcard/ns#Voice");
}
if($depiction)
	$shop->add_rel("foaf:logo", $depiction);
$geo = new Resource(null, null);
if($latitude)
	$geo->add_property("vcard:latitude", number_format($latitude, 5, ".", ""), "xsd:float");
if($longitude)
	$geo->add_property("vcard:longitude", number_format($longitude, 5, ".", ""), "xsd:float");
if($latitude || $longitude)
	$shop->add_rel("vcard:geo", $geo);
// mondays through fridays
$opening_hours_mofr = new Resource("#mon_fri", "gr:OpeningHoursSpecification");
$opening_hours_mofr->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Monday");
$opening_hours_mofr->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Tuesday");
$opening_hours_mofr->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Wednesday");
$opening_hours_mofr->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Thursday");
$opening_hours_mofr->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Friday");
if($opens_mofr)
	$opening_hours_mofr->add_property("gr:opens", $opens_mofr.":00", "xsd:time");
if($closes_mofr)
	$opening_hours_mofr->add_property("gr:closes", $closes_mofr.":00", "xsd:time");
if($opens_mofr || $closes_mofr)
	$shop->add_rel("gr:hasOpeningHoursSpecification", $opening_hours_mofr);
// saturday
$opening_hours_sa = new Resource("#sat", "gr:OpeningHoursSpecification");
$opening_hours_sa->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Saturday");
if($opens_sa)
	$opening_hours_sa->add_property("gr:opens", $opens_sa.":00", "xsd:time");
if($closes_sa)
	$opening_hours_sa->add_property("gr:closes", $closes_sa.":00", "xsd:time");
if($opens_sa || $closes_sa)
	$shop->add_rel("gr:hasOpeningHoursSpecification", $opening_hours_sa);
// sunday
$opening_hours_su = new Resource("#sun", "gr:OpeningHoursSpecification");
$opening_hours_su->add_rel("gr:hasOpeningHoursDayOfWeek", "http://purl.org/goodrelations/v1#Sunday");
if($opens_su)
	$opening_hours_su->add_property("gr:opens", $opens_su.":00", "xsd:time");
if($closes_su)
	$opening_hours_su->add_property("gr:closes", $closes_su.":00", "xsd:time");
if($opens_su || $closes_su)
	$shop->add_rel("gr:hasOpeningHoursSpecification", $opening_hours_su);
// $shop->add_rel("foaf:page", "TEMPORARY_HELPER");

$serializer = new Serializer();
$serializer->add_ns("vcard", "http://www.w3.org/2006/vcard/ns#");
$serializer->set_indent = "";
$serializer->set_indent_spaces = "  ";
$template = $serializer->serialize($shop);
$serializer->destroy();
unset($serializer);

include('output.template.php');
?>
