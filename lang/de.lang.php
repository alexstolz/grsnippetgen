<?php
/* slider */
$lang_slider_slide_label = "Folie";
$lang_slider_slide1_title = "Quickstart: Ein Shop mit einem Angebot";
$lang_slider_slide2_title = "Zwei Shops auf verschiedenen Seiten (ohne Angebote)";
$lang_slider_slide3_title = "Zwei Shops auf derselben Seite (ohne Angebote)";
$lang_slider_slide4_title = "Zwei Angebote auf verschiedenen Seiten";
$lang_slider_slide5_title = "Zwei Angebote auf derselben Seite";
$lang_slider_slide1 = 
	"<p>Das fiktive Unternehmen ACME GmbH besitzt eine Webpräsenz unter http://www.acme.com/. Es unterhält weiterhin eine Shop-Seite, die unter der Subdomäne http://store.acme.com/ verfügbar ist. Dort wird u.a. ein Produkt des Unternehmens unter der Adresse http://store.acme.com/product/ zum Verkauf angeboten.</p>
<p>Der die Firma beschreibende RDFa-Code sollte direkt auf der Seite http://www.acme.com/ veröffentlicht werden, kann ggf. aber auch auf einer der Seiten \"Über uns\" oder \"Kontakt\" eingepflegt werden. Anschließend kann das Unternehmen von Semantic Web Applikationen oder Suchmaschinen unter der URI http://www.acme.com/#company gefunden werden. Die das Unternehmen beschreibende Adresse leitet sich zum einen aus der URL der Webseite (http://www.acme.com/) und zum anderen aus dem Identifier (#company) ab, der lokal auf der Unternehmenswebseite definiert wird (damit dereferenzierbar ist) und die eigentliche Ressource beschreibt.</p>
<p>Dieselbe Vorgehensweise kann für die Shop-Webseite und die Produktseite übernommen werden. Deren Semantic Web Adressen lauten demnach http://store.acme.com/#store bzw. http://store.acme.com/product/#offer. Die rev-Links im RDFa-Code stellen eine Verbindung zwischen den Adressen (Shop URI und Produkt URI) und der URI des Unternehmens dar, d.h. rev ist eine inverse Beziehung zwischen Unternehmen und Shop/Geschäftsstelle (gr:hasPOS) bzw. zwischen Unternehmen und Angebot (gr:offers).</p>";
$lang_slider_slide2 = 
	"<p>Dieses Beispiel illustriert wie zwei Shops oder Geschäftsstellen verteilt auf verschiedene Standorte mithilfe von GoodRelations fast mühelos definiert werden können. Im vorliegenden Beispiel werden zwei Subdomänen für die Shops angenommen.</p>
<p>Der Nutzer des Tools muss lediglich das Formular für den Shop ausfüllen und die jeweils korrekte URL der Subdomäne angeben. Die einzugebenden URLs für die Veröffentlichung der RDFa Snippets sind http://store1.acme.com/ und http://store2.acme.com/. Die inverse Relation gr:hasPOS muss dabei jeweils auf die Adresse http://www.acme.com/#company verweisen.</p>";
$lang_slider_slide3 = 
	"<p>In diesem Beispiel werden die beiden Shops unter ein und derselben URL einer Webseite veröffentlicht.</p>
<p>Fall beide Shops des Unternehmens (z.B. Standort der Geschäftsstellen) auf derselben Webseite veröffentlicht werden, dann sollten auch deren Semantic Web-Ressourcen auf dieser gemeinsamen Seite definiert werden, d.h. zwei RDFa Snippets werden erzeugt (eine pro Shop) und anschließend z.B. untereinander im Quellcode der gemeinsamen Webseite platziert http://stores.acme.com/. Um evtl. Mehrfachdefinitionen derselben URI zu vermeiden, müssen die Identifier für die Shops umbenannt werden, d.h. beispielsweise zu #store1 und #store2. Das Tool übernimmt diese Aufgabe nicht, dennoch ist es einfach ein RDFa Snippet pro Shop zu erzeugen und die Vorkommnisse von #store durch z.B. #store1 bzw. #store2 zu ersetzen.</p>";
$lang_slider_slide4 = 
	"<p>Dieses Beispiel zeigt, wie zwei Angebote an ein Unternehmen geknüpft werden können. Dieses Beispiel ist ähnlich dem bereits auf Folie 2 präsentierten Fall.</p>
    <p>Wir nehmen an, dass der Shop http://store.acme.com/ mehrere Produkte anbietet. Wir demonstrieren das Beispiel anhand von zwei Angeboten. Jedes Produkt des Shops erhält eine eindeutige Produkt URL, d.h. es gibt keine Überschneidungen zwischen den URLs der einzelnen Produkte. Man kann nun für jedes Produkt ein RDFa Snippet erzeugen und es in den Quellcode der entsprechenden Seite einpflegen (http://store.acme.com/product1/ und http://store.acme.com/product2/). Die Angebote verweisen automatisch mittels \"rev gr:offers\" auf die URI des Unternehmens, das die Produkte anbietet. Die URIs der Angebote für das Semantic Web lauten http://store.acme.com/product1/#offer und http://store.acme.com/product2/#offer und sind dereferenzierbar.</p>";
$lang_slider_slide5 = 
	"<p>Das letzte Beispiel präsentiert, wie mehrere Produktangebote auf einer einzelnen Webseite (unter einer URL) definiert werden können.</p>
<p>Ähnlich wie im Shop Szenario ist es möglich, dass mehrere Angebote unter ein und derselben Adresse verfügbar gemacht werden. D.h. die Angebote teilen sich eine gemeinsame URL und müssen daher über deren Identifier unterscheidbar gemacht werden.</p>
<p>Unter der Annahme, dass die Produkt-URL http://store.acme.com/products/ ist, dann sind die URIs der entsprechenden Angebote http://store.acme.com/products/#offer1 und http://store.acme.com/products/#offer2. Das vorliegende Tool kann solche eindeutigen Identifier nicht erzeugen, daher müssen diese händisch umbenannt werden von z.B. #offer in #offer1, #offer2, usw.</p>";
/* config */
$lang_fillin = "Dieses Feld sollte unbedingt ausgefüllt werden";
$mandatory_field = "<span class=\"mandatory\" title=\"$lang_fillin\">*</span>";
// company, and shop (address)
$lang_conf_legal_name =
	$mandatory_field."Firmenbezeichnung";
$lang_conf_country_name =
	"Land";
$lang_conf_locality =
	"Stadt";
$lang_conf_postal_code =
	"Postleitzahl";
$lang_conf_street_address =
	"Straße und Hausnummer";
$lang_conf_tel =
	"Telefon (vorgeschlagenes Format: +49-0123-456789)";
$lang_conf_company_depiction =
	"URL des Unternehmenslogos (z.B. http://www.example.com/image.(jpg|png|gif|svg))";
// shop only
$lang_conf_store_name =
	$mandatory_field."Name der Geschäftsstelle / des Shops";
$lang_conf_store_depiction =
	"URL des Geschäftslogos (z.B. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_latitude =
	"Breitengrad";
$lang_conf_longitude =
	"Längengrad";
$lang_conf_opens_mofr =
	"Öffnungszeiten von Montag bis Freitag (vorgegebenes Format: 08:30)";
$lang_conf_closes_mofr =
	"Ladenschlusszeiten für Montag bis Freitag (vorgegebenes Format: 16:00)";
$lang_conf_opens_sa =
	"Öffnungszeit am Samstag (vorgegebenes Format: 08:30)";
$lang_conf_closes_sa =
	"Ladenschlusszeit am Samstag (vorgegebenes Format: 12:00)";
$lang_conf_opens_su =
	"Öffnungszeit am Sonntag (vorgegebenes Format: 08:30)";
$lang_conf_closes_su =
	"Ladenschlusszeit am Sonntag (vorgegebenes Format: 12:00)";
$lang_conf_page =
	$mandatory_field."Webseite des Unternehmens (Shop und Angebot werden auf diese Adresse zurückverweisen, z.B. http://www.example.com/)";
// offer
$lang_conf_product_name =
	$mandatory_field."Produktname";
$lang_conf_description =
	"Produktbeschreibung";
$lang_conf_lang =
	"Sprache der Produktbeschreibung (<br />wählen Sie eine Sprache aus <a href=\"http://en.wikipedia.org/wiki/ISO_639-1\">ISO 639-1</a>, z.B. \"en\" oder \"de\")";
$lang_conf_product_page =
	"URL der Produkt-Detailseite (z.B. http://www.example.com/product/)";
$lang_conf_product_depiction =
	"URL des Produktbildes (z.B. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_gtin_13 =
	"EAN-13, 13-stelliger UPC, oder 13-stelliger ISBN Code für das Produkt";
$lang_conf_currency =
	"(<br />3-stelliger <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a>-Währungscode, z.B. \"EUR\" oder \"USD\", sowie Preis des Produkts wählen)";
$lang_conf_price =
	"Produktpreis";
$lang_conf_validfrom =
	"Gültigkeit des Produktangebots <strong>von</strong> (Datumsformat ".date("d.m.Y\T00:00:00\Z").")";
$lang_conf_validthrough =
	"Gültigkeit des Produktangebots <strong>bis</strong> (Datumsformat ".date("d.m.Y\T23:59:00\Z", mktime(0, 0, 0, date("m"), date("d"), date("Y")+1)).")";

/* index */
$lang_step = "Schritt";
$lang_prologue =
	"<h1>Rich Snippet Generator für</h1><div style=\"float:left\"><a href=\"http://purl.org/goodrelations/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logos/gr_banner_small.png\" alt=\"GoodRelations\"/></a></div><div style=\"float:right\"><a href=\"http://www.ebusiness-unibw.org/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logo_researchgroup.png\" alt=\"E-Business and Web Science Research Group\"/></a></div>
	<div style=\"clear:both; padding-bottom: 12px;\"></div>
	<p>GoodRelations ist eine mächtige, aber zugleich auch einfache Technik um mit Bedeutung hinterlegte Informationen über Ihr Geschäft in Ihren Webseiten einzubetten. Damit können Sie die Sichtbarkeit Ihrer angebotenen Produkte und Dienstleistungen in der neuesten Suchmaschinen-Generation (z.B. <a href=\"http://www.heppresearch.com/gr4google\">Google</a> und Yahoo SearchMonkey), für die aktuellsten mobilen Applikationen und in Browser-Plugins erhöhen. Zusätzlich können hinsichtlich SEO (Search Engine Optimization) positive Effekte bei traditionellen Suchmaschinen erzielt werden.</p>
	<p>Mit dem vorliegenden Tool können Sie sich sogenannte <em>Code Snippets</em> oder Codefragmente im W3C RDFa Format generieren lassen, die sich dann einfach per Copy-and-Paste in Ihre Webseite einbetten lassen. Es muss lediglich das Markup im XHTML/HTML Header leicht modifiziert werden, wie <a href=\"#mod_header\">später</a> auch beschrieben wird.</p>
	<p>Es zahlt sich aus. Es ist denkbar einfach. Und die größte amerikanische Firma für Unterhaltungselektronik, BestBuy, setzt diese Technik bereits mit beachtlichem Erfolg ein.</p>";
$lang_mod_header =
	"Update des XHTML/HTML Headers";
$lang_mod_header_p1 =
	"<p>Sobald Sie die Codefragmente in die entsprechenden Webseiten eingebaut haben, sollten Sie die Web Crawler über das Update informieren. Dieser Vorgang ist auch denkbar einfach:</p>
	<p>Sie können GoodRelations in RDFa in Verbindung mit XHTML, HTML5 oder auch HTML4 Code verwenden, ungeachtet des Standardisierungsfortschritts der verwendeten DOCTYPE-Deklaration.</p";
$lang_mod_header_xhtml =
	"XHTML";
$lang_mod_header_xhtml_li1 =
	"Setzen Sie den DOCTYPE auf \"XHTML+RDFa 1.0\":";
$lang_mod_header_xhtml_li2 =
	"Fügen Sie ein Versions-Attribut mit dem Inhalt \"XHTML+RDFa 1.0\" in das HTML-ELement ein:";
$lang_mod_header_xhtml_li3 =
	"Überprüfen Sie, ob das &lt;head&gt;-Element den passenden Content-Type und das passende Encoding für XHTML besitzt:";
$lang_mod_header_html5 =
	"HTML5";
$lang_mod_header_html5_li1 =
	"Setzen Sie den DOCTYPE auf \"html\":";
$lang_mod_header_html5_li2 =
	"Fügen Sie ein Versions-Attribut mit dem Inhalt \"HTML+RDFa 1.1\" in das HTML-ELement ein:";
$lang_mod_header_html =
	"Andere HTML-Standards";
$lang_mod_header_html_li1 =
	"Verwenden Sie entweder das obige HTML5 Rezept oder setzen Sie das Versions-Attribut des HTML-Elements auf \"HTML+RDFa 1.1\" oder \"XHTML+RDFa 1.0\". Viele Web-Clients werden hieraus dann entsprechend RDF-Inhalte generieren. Entweder";
$lang_mod_header_html_li2 =
	"oder";
$lang_mod_header_p2 =
	"<p>Wir können Ihnen dabei helfen, die neu hinzugefügten GoodRelations-Inhalte Ihrer Webseite im Web of Linked Data zu publizieren. Hierzu bieten wir einen Online-Dienst an, bei dem Sie ihre Webseite eintragen können. Wir übernehmen dann für Sie die Weiterleitung. Der Dienst befindet sich <a href=\"http://gr-notify.appspot.com/\">hier</a>.</p>";
$lang_additional_resources =
	"Weitere Ressourcen";
$lang_additional_quickstart =
	"erklärt die von diesem Tool verwendeten Templates";
$lang_additional_cookbook =
	"komplexere Muster für spezifische Szenarien";
$lang_additional_goodrelations =
	"Informationen über das zugrundeliegende GoodRelations Vokabular";
$lang_additional_grnotify =
	"Übermittlungsdienst für GoodRelations-Inhalte an semantische Suchmaschinen";
$lang_sourcecode_title =
    "Quellcode";
$lang_sourcecode_content =
    "Der Quellcode dieses Tools steht unter einer LGPL-Lizenz und wurde als Projekt unter Google Code veröffentlicht: <a href=\"http://code.google.com/p/grsnippetgen/\">http://code.google.com/p/grsnippetgen/</a>.";
$lang_acknowledgements_title =
    "Danksagung";
$lang_acknowledgements_content =
    "Besonderer Dank geht an Özer Kavak und Giorgos Alexiou für wertvolle Beiträge an der Übersetzung des Tools.";
$lang_epilogue =
	"<p><strong>Entwickler:</strong> Alex Stolz</p>
	<p><strong>Haftungsausschluss:</strong> Dies ist ein Service der Forschungsgruppe <a href=\"http://www.unibw.de/ebusiness/\">E-Business and Web Science Research Group</a> an der Universität der Bundeswehr München und bietet weder ausdrückliche noch inbegriffene Gewährleistungen.</p>";
	
/* controller.inc */
$lang_controller_title =
	"Erstellen Sie ein Rich Snippet für ";
$lang_controller_title_company =
	"Ihr Unternehmen";
$lang_controller_title_shop =
	"Ihre Geschäftsstelle";
$lang_controller_title_offer =
	"ein individuelles Produkt oder eine Dienstleistung";
$lang_controller_p1_shop =
	"Dieser Schritt ist nur notwendig, falls Sie ein Shop oder eine Geschäftsstelle besitzen.";
$lang_controller_p1_shop_button =
	"Adressdaten vom Unternehmen kopieren";
$lang_controller_p1_offer =
	"GoodRelations ist am effektivsten, wenn Sie individuelle Daten für Ihre Produkte und Dienstleistungen veröffentlichen. Das ist v.a. relevant für dynamische Web Shops mit vielen Artikeln.";
$lang_controller_geo_desc =
	"Geo Positionen";
$lang_controller_geo_button =
	"Ermittle die Geoposition für die gegebene Adresse";
$lang_controller_select =
	"auswählen ...";
$lang_controller_currency =
	"Währung und Produktpreis";
$lang_controller_category =
	"Produktkategorie";
$lang_controller_notify_lang_code =
	"Sie können auch einen eigenen Sprachcode eingeben, der nicht in der Liste enthalten ist";
$lang_controller_notify_currency_code =
	"Sie können auch einen eigenen Währungscode eingeben, der in der Liste nicht aufgeführt ist";
$lang_controller_notify_price =
	"Preis";
// is placeholder or actual product or service
$lang_controller_prodtype_title = "Unbestimmtes Produkt (z.B. mehrere Produkte desselben Typs im Angebot)";
$lang_controller_prodtype_hint = "(<br />nicht anzukreuzen, falls ein bestimmter, z.B. benutzter Artikel angeboten wird)";
// delivery methods
$lang_controller_deliverymethod_directdownload = "Download";
$lang_controller_deliverymethod_freight = "Paketfracht";
$lang_controller_deliverymethod_mail = "Post";
$lang_controller_deliverymethod_ownfleet = "Eigenes Fahrzeug";
$lang_controller_deliverymethod_pickup = "Selbstabholung";
$lang_controller_notify_deliverymethods = "Wählen Sie die zutreffenden Versandarten aus (STRG+Click)";
$lang_controller_deliverymethod_title = "Versandmöglichkeiten";
$lang_controller_deliverymethod_hint = "(<br />siehe <a href=\"http://purl.org/goodrelations/v1#DeliveryMethod\">vordefinierte Instanzen für Versandarten</a> in GoodRelations)";
// business functions
$lang_controller_busfun_constructioninstallation = "Konstruktion/Installation";
$lang_controller_busfun_dispose = "Entsorgung";
$lang_controller_busfun_leaseout = "Vermietung";
$lang_controller_busfun_maintain = "Wartung";
$lang_controller_busfun_provideservice = "Dienstleistung";
$lang_controller_busfun_repair = "Reparatur";
$lang_controller_busfun_sell = "Verkauf";
$lang_controller_notify_businessfunction = "Wählen Sie eine für das Produkt passende Unternehmensfunktion aus";
$lang_controller_businessfunction_title = "Unternehmensfunktion";
$lang_controller_businessfunction_hint = "(<br />siehe <a href=\"http://purl.org/goodrelations/v1#BusinessFunction\">vordefinierte Instanzen für Unternehmensfunktionen</a> in GoodRelations)";
// payment methods
$lang_controller_paymethod_banktransferinadvance = "Vorkasse";
$lang_controller_paymethod_invoice = "Rechnung";
$lang_controller_paymethod_cash = "Barzahlung";
$lang_controller_paymethod_checkinadvance = "Scheck im Voraus";
$lang_controller_paymethod_cashondelivery = "Nachnahme";
$lang_controller_paymethod_directdebit = "Bankeinzug";
$lang_controller_notify_paymethods =
	"Wählen Sie aus mehreren Zahlungsmöglichkeiten aus (STRG+Click)";
$lang_controller_paymentmethod_title =
	"Zahlungsmethoden";
$lang_controller_paymentmethod_hint =
	"(<br />siehe <a href=\"http://purl.org/goodrelations/v1#PaymentMethod\">vordefinierte Instanzen für Zahlungsmethoden</a> in GoodRelations)";
// customer types
$lang_controller_customer_enduser = "Endverbraucher";
$lang_controller_customer_business = "Unternehmen";
$lang_controller_customer_public = "Öffentliche Einrichtungen";
$lang_controller_customer_reseller = "Wiederverkäufer";
$lang_controller_notify_customertypes =
	"Wählen Sie mögliche Geschäftspartner für dieses Produkt (STRG+Click)";
$lang_controller_customertype_title =
	"Geschäftspartner";
$lang_controller_customertype_hint =
	"(<br />siehe <a href=\"http://purl.org/goodrelations/v1#BusinessEntityType\">vordefinierte Instanzen für Typen von Geschäftspartnern</a> in GoodRelations)";
// eligible regions
$lang_controller_notify_eligibleregions =
	"Wählen Sie Länder aus, für die das Angebot gültig ist (STRG+Click)";
$lang_controller_eligibleregion_title =
	"Gültige Länder";
$lang_controller_eligibleregion_hint =
	"(<br /><a href=\"#\" id=\"selectA_CH_D\">A, CH and D auswählen</a><br /><a href=\"#\" id=\"selectEU\">EU Mitgliedsstaaten auswählen</a><br /><a href=\"#\" id=\"selectNone\">Auswahl zurücksetzen</a>)";

$lang_controller_submit_button =
	"Code Snippet generieren";
$lang_controller_allow_logging =
	"Anonymisiertes Logging von Informationen für Forschungszwecke erlauben?";
$lang_controller_shop_additional_information =
	"<p>Falls Sie eine granularere Beschreibung Ihrer Öffnungszeiten wünschen, dann passen Sie einfach den Abschnitt mit den gr:OpeningHoursSpecification-Eigenschaften an. Für Details siehe <a href=\"http://www.ebusiness-unibw.org/wiki/GoodRelationsQuickstart\">GoodRelations Quickstart Guide</a>.</p>
	<p>Falls Sie mehrere Geschäftseinheiten, aber nur eine Webseite haben, dann erstellen und kopieren Sie das Codestück mehrfach und ersetzen alle Vorkommen der drei Elemente <em>(#store, #mon_fri, und #sat)</em> innerhalb desselben Codeabschnitts mit <em>(#store1, #mon_fri1, #sat1)</em>, <em>(#store2, #mon_fri2, #sat2)</em>, etc.</p>";
$lang_controller_offer_additional_information =
	"<p>Falls Sie mehrere Produkte innerhalb derselben Webseite anbieten, dann erstellen und kopieren Sie das Codestück mehrfach und ersetzen alle Vorkommen des Elements <em>#offer</em> innerhalb desselben Codeabschnitts mit <em>#offer1</em>, <em>#offer2</em>, etc.</p>";

/* error.template */
$lang_error_warning_miss =
	"Fehlendes Argument für";
$lang_error_error_depiction =
	"Format für die Bild-URI fehlerhaft in";
$lang_error_error_depiction_desc =
	"Benutzen Sie das korrekte HTTP Schema und eine Bild-Dateiendung, z.B. http://www.example.com/image.(jpg|png|gif|svg)";
$lang_error_error_page =
	"Format für die URI fehlerhaft in";
$lang_error_error_page_desc =
	"Benutzen Sie das korrekte HTTP Schema, z.B. http://www.example.com/";
$lang_error_error_hours =
	"Vorgegebenes Format nicht eingehalten in";
$lang_error_error_hours_desc =
	"Überprüfe, ob das Format für das eingegebene Argument dem Muster 12:00 entspricht";
$lang_error_error_gtin =
	"Eingabefeld erlaubt nur Ziffern in";
$lang_error_error_gtin_desc =
	"Zumindest ein unerlaubtes Zeichen wurde gefunden. Bitte korrigieren um fortzufahren";
$lang_error_error_gtin_len =
	"Anzahl der Ziffern ungleich 13 in";
$lang_error_error_gtin_len_desc =
	"Bitte korrigieren um fortzufahren";
$lang_error_error_currency =
	"Anzahl der Zeichen ungleich 3 in";
$lang_error_error_currency_desc =
	"Für weitere Informationen siehe <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a>. Bitte korrigieren um fortzufahren";
$lang_error_error_price =
	"Eingabewert ist nicht numerisch in";
$lang_error_error_price_desc =
	"Geben Sie bitte einen numerischen Wert ein, z.B. 12.99";
$lang_error_error_validity =
	"Datumsformat ist nicht valide für";
$lang_error_error_validity_desc =
	"Geben Sie das Datumsformat bitte in der Form 2008-05-30T09:30:10Z ein";
	
/* output.template */
$lang_output_error =
	"Fehler";
$lang_output_warning =
	"Warnung(en)";
$lang_output_warning_supplement =
	"Das Code Snippet ist zwar valide, aber noch nicht vollständig.";
$lang_output_success =
	"Fehlerfrei";
$lang_output_success_company =
	"<p>Fein!<br/>Kopieren Sie nun das obige Codestück und fügen Sie es in Ihre <strong>Unternehmenswebseite</strong> ein, am besten direkt vor dem schließenden HTML BODY Tag. Danach fahren Sie mit Schritt 2 fort!</p>";
$lang_output_success_shop =
	"<p>Sehr gut!<br/>Gehen Sie wie soeben vor indem Sie das Codefragment kopieren und dann in Ihre <strong>Shopwebseite</strong> einfügen. Falls die URL der Geschäftsstelle dieselbe wie die des Unternehmens ist, dann platzieren Sie den Code zwischen die Unternehmensbeschreibung und das abschließende HTML BODY Tag. WICHTIG: Überprüfen Sie, ob gr:hasPOS richtig auf die Unternehmenswebseite verweist (z.B. http://www.example.com/#company). Falls nicht, so bessern Sie es aus. Dann können Sie mit Schritt 3 fortfahren!</p>";
$lang_output_success_offer =
	"<p>Ausgezeichnet!<br/>Ihre Produktbeschreibung ist valide und kann nun auf der <strong>Produkt-Detailseite</strong> veröffentlicht werden. Kopieren Sie wiederum das generierte Codestück und fügen es vor dem abschließenden HTML BODY Tag Ihrer Produktwebseite ein. Der vierte und letzte Schritt, der nun noch verbleibt, ist die Anpassung der Header ihrer Webseite.</p>";
?>