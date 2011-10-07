<?php
/* slider */
$lang_slider_slide_label = "Slide";
$lang_slider_slide1_title = "Quickstart: One store with one offer";
$lang_slider_slide2_title = "Two stores on separate pages (offers omitted)";
$lang_slider_slide3_title = "Two stores on the same page (offer omitted)";
$lang_slider_slide4_title = "Two offers on separate pages";
$lang_slider_slide5_title = "Two offers on the same page";
$lang_slider_slide1_text = 
	"<p>Ο διαδικτυακός τόπος της εταιρίας Acme Inc. είναι ο http://www.acme.com. To web shop της εν λόγω εταιρίας είναι στο subdomain  http://store.acme.com, όπου η εν λόγω εταιρία προσφέρει τα διαθέσιμα προϊόντα της στο http://store.acme.com/product/.</p>
	
<p>O κώδικας RDFa  για την εταιρία Acme Inc. θα πρέπει να ενσωματωθεί είτε απευθείας στο http://www.acme.com είτε στο \"about\" -page της εταιρίας. Μετά το πέρας αυτής της διαδικασάς ο διαδικτυακός τόπος της εταιρίας μπορεί να αντιμετωπιστεί απο κάθε εφαρμογή Semantic Web ή μηχανή αναζήτησης μέσω του http://www.acme.com/#company. To URI αποτελέιται απο το URL της εταιρίας (http://www.acme.com) και το σημασιολογικό αναγνωριστικό (#company) το οποίο καθοπρίζεται τοπικά στο διαδικτυακό τόπο της εταιρίας. ( Άρα αποκωδικοποιήσιμο από κάθε agent ).</p>
<p>Η ίδια διαδικασία εφαρμόζεται και για τους πόρους shop και offering. Οι σημασιολογικές διευθύνσεις τους είναι http://store.acme.com/#store και http://store.acme.com/product/#offer, αντίστοιχα. Τα rev-links στους RDFa κώδικες τους τα συνδέουν ( το shop URI και το offer URI ) με το company URI, για παράδειγμα το rev είναι μια αντίστροφη σχέση ανάμεσα στο company και στο shop (gr:hasPOS) και στο company και στο offer (gr:offers), αντίστοιχα.</p>";
$lang_slider_slide2_text = 
	"<p>Στην GoodRelations μπορούν να αναπαρασταθούν με ευκολία παραπάνω απο ένα καταστήματα της ίδιας εταιρίας.</p>
<p>Το παρακάτω παράδειγμα δείχνει πώς δύο καταστήματα σε διαφορετικές τοποθεσίες ( εδώ σε διαφορετικά subdomains ) μπορούν να καθοριστούν.</p>
<p>Ο χρήστης πρέπει απλά να συμπληρώσει τις φόρμες για το κατάστημα και να παρέχει το σωστό subdomain URL για καθε μια απο αυτές. Οι τοποθεσίες για τα RDFa snippets θα πρέπει να είναι  http://store1.acme.com/ και http://store2.acme.com/, αντίστοιχα. Η αντίστροφη ιδιότητα τους gr:hasPOS θα πρέπει και στις δύο περιπτώσεις να δείχνει στο http://www.acme.com/#company.
</p>";
$lang_slider_slide3_text = 
	"<p>Το παρακάτω παράδειγμα δείχνει πώς δύο πόροι καταστημάτων μπορούν να δημοσιευθούν στον ίδιο διαδικτυακό τόπο. Αν δύο καταστήματα μιας εταιρίας μοιράζονται την ίδια ιστοσελίδα, μπορούν και θα πρέπει να να δημοσιευθούν κάτω απο ένα κοινό URL. Για παράδειγμα, δύο RDFa snippets θα πρέπει να δημιουργηθούν ( ένα για το κάθε κατάστημα ) και να επικολληθούν στην ιστοσελίδα http://stores.acme.com/. Για να αποφευχθούν ρήξεις μεταξύ των δύο URIs, τα αναγνωριστικά πρέπει να ονομαστούν διαφορετικά, για παράδειγμα, #store1 και #store2. Αυτό δε μπορεί να πραγματοποιηθεί από το εργαλείο και θα πρέπει να γίνει χειροκίνητα.  Απλά κάντε αντικατάσταση του #store με το #store1 και του άλλου #store με το #store2.</p>";
$lang_slider_slide4_text = 
	"<p>Το παρακάτω παράδειγμα δείχνει πώς δύο προσφερές αντί για μια μπορούν να συσχετιστούν με μια εταιρία. Είναι βασικά η ίδια διαδικασία με αυτή που έχει ήδη περιγραφεί στο παράδειγμα του slide 2.</p>
    <p>Ας υποθέσουμε οτι το κατάστημα http://store.acme.com διαθέτει πολλαπλές προφορές. Χάριν απλότητας, θα δείξουμε ένα παράδειγμα με δύο μόνο προσφορές. Κάθε προιόν το οποίο προσφέρεται απο το κατάστημα έχει ένα μοναδικό product URL. Τώρα δημιουργήστε για κάθε προσφορά τον κώδικα RDFa και ενσωματώστε το στις αντίστοιχες σελίδες (http://store.acme.com/product1/ και http://store.acme.com/product2/). Οι προσφορές θα συνδέονται με την εταιρία που προσφέρει τα προιόντα μέσω του (\"rev gr:offers\"). Οι σημασιολογικοί πόροι των προσφορών είναι αποκωδικοποιήσιμοι μέσω του http://store.acme.com/product1/#offer και http://store.acme.com/product2/#offer, αντίστοιχα.</p>";
$lang_slider_slide5_text = 
	"<p>Σε αυτό το τελευταίο παράδειγμα περιγράφεται η περίπτωση όπου δύο προσφορές μοιράζονται  το ίδιο URL. Όμοια με το προηγούμενο παράδειγμα, είναι ευνόητο οτι οι δύο προσφορές είναι προσβάσιμες από την ίδια τοποθεσία στην ιστοσελίδα. Έπειτα μοιράζονται το ίδιο URL και χρειάζονται σημασιολογικά αναγνωριστικά για να είναι διαφοροποιήσιμες.</p>
<p>Ας υποθέσουμε οτι το URL του προϊόντος είναι το http://store.acme.com/products/, τότε τα URIs των προσφορών θα είναι http://store.acme.com/products/#offer1 και http://store.acme.com/products/#offer2. To snippet generator δεν παράγει τέτοια μοναδικά αναγνωριστικά, άρα η μετονομασία τους εξαρτάται από το χρήστη ( #offer σε #offer1, #offer2, ... κ.ο.κ.).</p>";
/* config */
$lang_fillin = "H παρακάτω φόρμα συνιστάται να συμπληρωθεί";
$mandatory_field = "<span class=\"mandatory\" title=\"$lang_fillin\">*</span>";
// company, and shop (address)
$lang_conf_legal_name =
	"Επωνυμία επιχείρησης";
$lang_conf_country_name =
	"Χώρα";
$lang_conf_locality =
	"Πόλη";
$lang_conf_postal_code =
	"Ταχυδρομικός Κώδικας";
$lang_conf_street_address =
	"Οδός και αριθμός";
$lang_conf_tel =
	"Αρ. τηλεφώνου (προτεινόμενη μορφή: +30-2310-777777)";
$lang_conf_company_depiction =
	"URL λογότυπου ή εικόνας (π.χ. http://www.example.com/image.(jpg|png|gif|svg))";
// shop only
$lang_conf_store_name =
	"Όνομα καταστήματος";
$lang_conf_store_depiction =
	"URL λογότυπου ή εικόνας καταστήματος (e.g. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_latitude =
	"Γεωγραφικό πλάτος";
$lang_conf_longitude =
	"Γεωγραφικό μήκος";
$lang_conf_opens_mofr =
	"Ώρες λειτουργίας &#40άνοιγμα&#41 καταστήματος από Δευτέρα έως Παρασκευή (προτεινόμενη μορφή: 08:30)";
$lang_conf_closes_mofr =
	"Ώρες λειτουργίας &#40κλείσιμο&#41 καταστήματος από Δευτέρα έως Παρασκευή (προτεινόμενη μορφή: 16:00)";
$lang_conf_opens_sa =
	"Ώρες λειτουργίας &#40άνοιγμα&#41 καταστήματος το Σάββατο (προτεινόμενη μορφή: 08:30)";
$lang_conf_closes_sa =
	"Ώρες λειτουργίας &#40κλείσιμο&#41 καταστήματος το Σάββατο (προτεινόμενη μορφή: 12:00)";
$lang_conf_opens_su =
	"Ώρες λειτουργίας &#40άνοιγμα&#41 καταστήματος την Κυριακή (προτεινόμενη μορφή: 08:30)";
$lang_conf_closes_su =
	"Ώρες λειτουργίας &#40κλείσιμο&#41 καταστήματος την Κυριακή (προτεινόμενη μορφή: 12:00)";
$lang_conf_page =
	"Ιστοσελίδα εταιρίας (π.χ.. http://www.example.com/)";
// offer
$lang_conf_product_name =
	"Ονομασία προϊόντος";
$lang_conf_description =
	"Περιγραφή προϊόντος";
$lang_conf_lang =
	"Γλώσσα περιγραφής (επιλέξτε κωδικό γλώσσας από <a href=\"http://en.wikipedia.org/wiki/ISO_639-1\">ISO 639-1</a>, π.χ. \"en\" ή \"gr\")";
$lang_conf_product_page =
	"URL της σελίδας του προϊόντος (π.χ. http://www.example.com/product/)";
$lang_conf_product_depiction =
	"URL φωτογραφίας προϊόντος (π.χ. http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_gtin_13 =
	"EAN-13, 13-ψήφιο UPC, ή 13-ψήφιος ISBN κωδικός του προϊόντος";
$lang_conf_currency =
	"(επιλέξτε τον κωδικό <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> νομίσματος, π.χ. \"EUR\" ή \"USD\", και την τιμή του προϊόντος)";
$lang_conf_price =
	"Τιμή προϊόντος";
$lang_conf_validfrom =
	"<strong>Έναρξη προσφοράς</strong> ενός προϊόντος (προτεινόμενη μορφή: ".date("d.m.Y\T00:00:00\Z").")";
$lang_conf_validthrough =
	"<strong>Λήξη προσφοράς</strong> ενός προϊόντος  (προτεινόμενη μορφή: ".date("d.m.Y\T23:59:00\Z", mktime(0, 0, 0, date("m"), date("d"), date("Y")+1)).")";

/* index */
$lang_step = "Βήμα";
$lang_prologue =
	"<h1>Rich Snippet Generator για</h1><div style=\"float:left\"><a href=\"http://purl.org/goodrelations/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logos/gr_banner_small.png\" alt=\"GoodRelations\"/></a></div><div style=\"float:right\"><a href=\"http://www.ebusiness-unibw.org/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logo_researchgroup.png\" alt=\"E-Business and Web Science Research Group\"/></a></div>
	<div style=\"clear:both; padding-bottom: 12px;\"></div>
	<p>Η GoodRelations είναι μια πανίχυρη αλλά απλή τεχνική ώστε να εμπλουτίσετε την ιστοσελίδα σας με δομημένα δεδομένα σχετικά με την επιχείρηση σας στην ιστοσελίδα σας. Αυτό, σας δίνει το προνόμιο τα προϊόντα ή οι υπηρεσίες σας να είναι εύκολα προσβάσιμα στις μηχανές αναζήτησης τελευταίας γενιάς (π.χ. <a href=\"http://www.heppresearch.com/gr4google\">Google</a> ή Yahoo SearchMonkey), καινοτόμες mobile εφαρμογές, και επεκτάσεις του browser. Επιπλέον, σας δίνει πλεονέκτημα στις υπάρχουσες μηχανές αναζήτησης.</p>
	<p>Με αυτό το εργαλείο, μπορείτε να δημιουργήσετε εύκολα κώδικα χρησιμοποιώντας το πρότυπο RDFa της  W3C όπου απλά τον αντιγράφετε και τον κάνετε επικόλληση στην ιστοσελίδα σας. Εισάγεται τον κώδικα στις σελίδες σας και κάνετε ανανέωση του XHTML/HTML header, όπως περιγράφεται <a href=\"#mod_header\">παρακάτω</a>.</p>
	<p>Θα σας το ανταποδώσει. Είναι απλό. Η BestBuy το κάνει ήδη με αξιόλογα αποτελέσματα!.</p>";
$lang_mod_header =
	"Ανανέωση του XHTML/HTML header";
$lang_mod_header_p1 =
	"<p>Αφού αντιγράψατε τον κώδικα RDFa στις ιστοσελίδες που θέλετε, θα πρέπει να διευκρινίσετε την ύπαρξή τους στους crawlers. Αυτό είναι επίσης πανεύκολο:</p>
	<p>Αλλάξτε το DOCTYPE στο header σε \"XHTML+RDFa\": </p>";
$lang_mod_header_xhtml =
	"XHTML";
$lang_mod_header_xhtml_li1 =
	"Ορίστε το DOCTYPE σε XHTML+RDFa 1.0:";
$lang_mod_header_xhtml_li2 =
	"Ορίστε το html version attribute σε XHTML+RDFa1.0:";
$lang_mod_header_xhtml_li3 =
	"Ελέγξτε οτι το &lt;head&gt; element περιλαμβάνει το σωστό content type και την κωδικοποίηση για XHTML:";
$lang_mod_header_html5 =
	"HTML5";
$lang_mod_header_html5_li1 =
	"Ορίστε το DOCTYPE σε html:";
$lang_mod_header_html5_li2 =
	"Ορίστε το html version attribute σε HTML+RDFa1.1";
$lang_mod_header_html =
	"Other HTML markup";
$lang_mod_header_html_li1 =
	"Είτε χρησιμοποιείστε HTML5 είτε απλά θέστε το html version attribute σε HTML+RDFa1.1 είτε XHTML+RDFa1.0. Οι περισσότεροι clients θα εξάγουν τον RDF από αυτόν τον τύπο. Είτε";
$lang_mod_header_html_li2 =
	"είτε";
$lang_mod_header_p2 =
	"<p>Με την αποκλειστική υπηρεσία ειδοποίησης που παρέχουμε, μπορούμε να σας βοηθήσουμε να δημοσιεύσετε το ενσωματομένο GoodRelations περιεχόμενο. Το μόνο που πρέπει να κάνετε είναι να συμπληρώσετε την διεύθυνση της ιστοσελίδας σας, και αυτόματα αναλαμβάνουμε να καταχωρήσουμε τις ιστοσελίδες σας στον Ιστό των Linked Data. Αυτό το online εργαλείο είναι διαθέσιμο <a href=\"http://gr-notify.appspot.com/\">εδώ</a>.</p>";
$lang_additional_resources =
	"Επιπλέον πηγές";
$lang_additional_quickstart =
	"εξηγεί τα πρότυπα που χρησιμοποιεί η εφαρμογή";
$lang_additional_cookbook =
	"πιο σύνθετα πρότυπα για συγκεκριμένα σενάρια";
$lang_additional_goodrelations =
	"πληροφορίες σχετικά με την οντολογία GoodRelations";
$lang_additional_grnotify =
	"υπηρεσία ειδοποίησης για την καταχώρηση περιεχομένου GoodRelations σε σημασιολογικές μηχανές αναζήτησης";
$lang_sourcecode_title =
    "πηγαίου κώδικα";
$lang_sourcecode_content =
    "Ο πηγαίος κώδικας αυτου του εργαλείου είναι διαθέσιμος κατώ από την άδεια LPGL από <a href=\"http://code.google.com/p/grsnippetgen/\">http://code.google.com/p/grsnippetgen/</a>.";
$lang_acknowledgements_title =
    "Ευχαριστίες";
$lang_acknowledgements_content =
    "Ευχαριστούμε τους Özer Kavak και Γιώργο Αλεξίου οι οποίοι βοήθησαν στις μεταφράσεις αυτού του project.";
$lang_epilogue =
	"<p><strong>Προγραμματιστής:</strong> Alex Stolz</p>
	<p><strong>Αποποίηση:</strong> Αυτή η υπηρεσία προσφέρεται από το <a href=\"http://www.unibw.de/ebusiness/\">E-Business and Web Science Research Group</a> στο Universitat der Bundeswehr Munchen ως έχει χωρίς καμία ρητή ή ασαφής εγγυήση.</p>";	
	
/* controller.inc */
$lang_controller_title =
	"Δημιουργήστε ένα RDFa snippet για  ";
$lang_controller_title_company =
	"την εταιρία σας";
$lang_controller_title_shop =
	"το κατάστημά σας";
$lang_controller_title_offer =
	"ένα προϊόν ή υπηρεσία";
$lang_controller_p1_shop =
	"Αυτό το βήμα είναι απαραίτητο μόνο εάν διατηρείτε μια φυσική τοποθεσία καταστήματος.";
$lang_controller_p1_shop_button =
	"Αντιγράψτε τα στοιχεία διεύθυνσης καταστήματος από τη διεύθυνση εταιρίας";
$lang_controller_p1_offer =
	"Η οντολογία GoodRelations είναι πιο αποτελεσματική εάν δημοσιοποιήτε μεμονομένες προσφορές για τα προϊόντα ή τις υπηρεσίες σας. Αυτό έχει άμεση σχέση με δυναμικά Web Shops που προσφέρουν πολλά προϊόντα.";
$lang_controller_geo_desc =
	"Γεωτοποθεσία";
$lang_controller_geo_button =
	"Καθορισμός γεωτοποθεσίας μέσω της φυσικής διεύθυνσης";
$lang_controller_select =
	"επιλογή ...";
$lang_controller_currency =
	"Νόμισμα και τιμή προϊόντος";
$lang_controller_category =
	"Κατηγορία προϊόντος";
$lang_controller_notify_lang_code =
	"μπορείτε να εισάγετε ένα κωδικό γλώσσας που δεν βρίσκετε στη λίστα";
$lang_controller_notify_currency_code =
	"μπορείτε να εισάγετε ένα κωδικό νομίσματος που δεν βρίσκετε στη λίστα";
$lang_controller_notify_price =
	"τιμή";
// is placeholder or actual product or service
$lang_controller_prodtype_title = "Ανώνυμο προϊόν (π.χ. πολλαπλά προιόντα προς πώληση στο ίδιο article)";
$lang_controller_prodtype_hint = "(<br />Μη το επιλέξετε εάν προσφέρετε ένα συγκεκριμένο ή ήδη χρησιμοποιημένο article)";
// delivery methods
$lang_controller_deliverymethod_directdownload = "Απευθείας download";
$lang_controller_deliverymethod_freight = "Φορτωτική";
$lang_controller_deliverymethod_mail = "Ταχυδρομικός";
$lang_controller_deliverymethod_ownfleet = "Ιδιώκτιτος στόλος";
$lang_controller_deliverymethod_pickup = "Παραλαβή απο το κατάστημα";
$lang_controller_notify_deliverymethods = "Επιλέξτε πολλαπλές μεθόδους αποστολής (control+click)";
$lang_controller_deliverymethod_title = "Μέθοδοι αποστολής";
$lang_controller_deliverymethod_hint = "(<br />Δείτε στο <a href=\"http://purl.org/goodrelations/v1#DeliveryMethod\">προκαθορισμένες μεθόδους αποστολής</a> στην GoodRelations)";
// business functions
$lang_controller_busfun_constructioninstallation = "Κατασκευή/Εγκατάσταση";
$lang_controller_busfun_dispose = "Διάθεση";
$lang_controller_busfun_leaseout = "Μίσθωση";
$lang_controller_busfun_maintain = "Συντήρηση";
$lang_controller_busfun_provideservice = "Παροχή service";
$lang_controller_busfun_repair = "Επισκευή";
$lang_controller_busfun_sell = "Πώληση";
$lang_controller_notify_businessfunction = "Επιλέξτε τη λειτουργία της επιχείρησης για το προΙόν";
$lang_controller_businessfunction_title = "Λειτουργία επιχείρησης";
$lang_controller_businessfunction_hint = "(<br />Δείτε στο <a href=\"http://purl.org/goodrelations/v1#BusinessFunction\">προκαθορισμένες λειτουργίες επιχείρησης</a> στην GoodRelations)";
// payment methods
$lang_controller_paymethod_banktransferinadvance = "κατάθεση σε τραπεζικό λογαριασμό";
$lang_controller_paymethod_invoice = "τιμολόγιο";
$lang_controller_paymethod_cash = "μετρητά";
$lang_controller_paymethod_checkinadvance = "τραπεζική επιταγή";
$lang_controller_paymethod_cashondelivery = "αντικαταβολή";
$lang_controller_paymethod_directdebit = "άμεση χρέωση";
$lang_controller_notify_paymethods =
	"για να επιλέξετε πολλαπλούς τρόπους πληρωμής επιλέξτε με (control+click)";
$lang_controller_paymentmethod_title =
	"Τρόποι πληρωμής";
$lang_controller_paymentmethod_hint =
	"(δείτε τους <a href=\"http://purl.org/goodrelations/v1#PaymentMethod\">προκαθορισμένους τρόπους πληρωμής</a> στην οντολογία GoodRelations)";
// customer types
$lang_controller_customer_enduser = "Τελικοί χρήστες";
$lang_controller_customer_business = "Επιχειρήσεις";
$lang_controller_customer_public = "Δημόσιος τομέας";
$lang_controller_customer_reseller = "Μεταπωλητές";
$lang_controller_notify_customertypes =
	"Επιλέξτε πολλαπλούς με (control+click)";
$lang_controller_customertype_title =
	"Απευθυνόμενο κοινό";
$lang_controller_customertype_hint =
	"(<br />Δείτε στο <a href=\"http://purl.org/goodrelations/v1#BusinessEntityType\">προκαθορισμένες μορφές για το απευθυνόμενο κοινό</a> στην GoodRelations)";
// eligible regions
$lang_controller_notify_eligibleregions =
	"Επιλέξτε πολλαπλές περιοχές με (control+click)";
$lang_controller_eligibleregion_title =
	"Επιλέξιμες περιοχές";
$lang_controller_eligibleregion_hint =
	"(<br /><a href=\"#\" id=\"selectA_CH_D\">Επιλέξτε A, CH και D</a><br /><a href=\"#\" id=\"selectEU\">Επιλέξτε τα κράτη μέλη της Ε.Ε.</a><br /><a href=\"#\" id=\"selectNone\">Απόρριψη όλων</a>)";

$lang_controller_submit_button =
	"Δημιουργία κώδικα RDFa";
$lang_controller_allow_logging =
	"Επιτρέπω την ανώνυμη καταγραφή στοιχείων για ερευνητικούς σκοπούς";
$lang_controller_shop_additional_information =
	"<p>Εάν θέλετε να δηλώσετε μια πιο αναλυτική περιγραφή για το ωράριο λειτουργίας, θα πρέπει να παραμετροποιήσετε κατάλληλα τη γραμμή κώδικα gr:OpeningHoursSpecification σύμφωνα με τις ανάγκες σας. Δείτε τις αναλυτικές οδηγίες στον <a href=\"http://www.ebusiness-unibw.org/wiki/GoodRelationsQuickstart\">GoodRelations Quickstart Guide</a>.</p>
	<p>Εάν έχετε πάνω από δύο καταστήματα, αλλά μόνο μία ιστοσελίδα, απλώς δημιουργήστε τον κώδικα και αντιγράψτε τον αντικαθιστώντας τις μεταβλητές <em>(#store, #mon_fri, and #sat)</em> που βρίσκονται στον κώδικα με <em>(#store1, #mon_fri1, #sat1)</em>, <em>(#store2, #mon_fri2, #sat2)</em>,...</p>";
$lang_controller_offer_additional_information =
	"<p>Εάν έχετε πάνω από δύο προσφορές που βρίσκονται στην ίδια ιστοσελίδα, απλώς δημιουργήστε τον κώδικα και αντιγράψτε τον αντικαθιστώντας τις μεταβλητές που βρίσκονται στο στοιχείο <em>#offer</em> με <em>#offer1</em>, <em>#offer2</em>, ...</p>";

/* error.template */
$lang_error_warning_miss =
	"Δεν συμπληρώθηκε το πεδίο";
$lang_error_error_depiction =
	"Image URI pattern mismatch in";
$lang_error_error_depiction_desc =
	"Δώστε τη διεύθυνση στην κατάλληλη μορφή καθώς και όνομα αρχείου, e.g. http://www.example.com/image.(jpg|png|gif|svg)";
$lang_error_error_page =
	"Λάθος URI";
$lang_error_error_page_desc =
	"Λάθος μορφή διεύθυνσης ιστοσελίδας, π.χ. http://www.example.com/";
$lang_error_error_hours =
	"Λάθος μορφή ώρας";
$lang_error_error_hours_desc =
	"Ελέγξτε αν η παράμετρος που δώσατε είναι στη μορφή 12:00";
$lang_error_error_gtin =
	"Το πεδίο πρέπει να περιέχει μόνο αριθμητικά ψηφία";
$lang_error_error_gtin_desc =
	"Βρέθηκε τουλάχιστον ένας μη έγκυρος χαρακτήρας. Παρακαλώ διορθώστε για να συνεχίσετε";
$lang_error_error_gtin_len =
	"Τα ψηφία δεν είναι 13";
$lang_error_error_gtin_len_desc =
	"Παρακαλώ διορθώστε για να συνεχίσετε";
$lang_error_error_currency =
	"Οι χαρακτήρες δεν είναι τρείς για";
$lang_error_error_currency_desc =
	"Δείτε το <a href=\"http://en.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> για περισσότερες πληροφορίες. Παρακαλώ διορθώστε το για να συνεχίσετε";
$lang_error_error_price =
	"Η τιμή που εισάγατε δεν είναι αριθμητική";
$lang_error_error_price_desc =
	"Παρακαλώ ορίστε μια αριθμητική τιμή, π.χ. 12.99";
$lang_error_error_validity =
	"Η μορφή της ημερομηνίας δεν ισχύει για";
$lang_error_error_validity_desc =
	"Παρακαλώ δώστε μια έγκυρη μορφή ημερομηνίας όπως π.χ. 2008-05-30T09:30:10Z";
	
/* output.template */
$lang_output_error =
	"Λάθος";
$lang_output_warning =
	"Προειδοποίηση";
$lang_output_warning_supplement =
	"Ο κώδικας θα είναι έγκυρος, αλλά δε θα είναι ιδιαίτερα οφέλιμος.";
$lang_output_success =
	"Επιτυχία";
$lang_output_success_company =
	"<p>Πολύ ωραία!<br/>Τώρα αντιγράψτε τον παραπάνω κώδικα στην <strong>ιστοσελίδα της εταιρίας σας</strong>, καλύτερα να τοποθετηθεί ακριβώς κάτω από το opening HTML BODY tag &#40<body>&#41. Έπειτα συνεχίστε με το Βήμα 2!</p>";
$lang_output_success_shop =
	"<p>Θαυμάσια!<br/>Συνεχίστε όπως και πριν αντιγράφοντας τον κώδικα στην <strong>σελίδα του καταστήματος</strong>. Εάν το URI της ιστοσελίδας του καταστήματος είναι ίδιο με αυτό της εταιρίας, τότε τοποθετήστε τον κώδικα στην περιγραφή της εταιρίας και στο HTML BODY end tag. ΣΗΜΑΝΤΙΚΟ: εκτιμά εάν το gr:hasPOS συδέεται σωστά με την ιστοσελίδα της εταιρίας σας (π.χ. http://www.example.com/#company). Εαν όχι, διορθώστε το. Έπειτα συνεχίστε στο Βήμα 3!</p>";
$lang_output_success_offer =
	"<p>Τέλεια!<br/>Η περιγραφή της προσφοράς σας είναι έγκυρη και έτοιμη για να δημοσιευτεί στην <strong>σελίδα του προϊόντος</strong>. Αντιγράψτε τον κώδικα και τοποθετήστε τον ακριβώς κάτω από το opening HTML BODY tag &#40;<body>&#41; της σελίδας του προϊόντος. Το μόνο που έμεινε είναι το 4ο και τελευταίο Βήμα, όπου πρέπει να ανανεώσετε το Header της ιστοσελίδας σας.</p>";
?>