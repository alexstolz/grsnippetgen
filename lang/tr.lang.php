<?php
/* slider */
$lang_slider_slide_label = "Slayt";
$lang_slider_slide1_title = "Hızlı başlangıç: Bir mağaza bir ürün";
$lang_slider_slide2_title = "Farklı satfalarda iki mağaza (ürün olmadan)";
$lang_slider_slide3_title = "Aynı sayfada iki ayrı mağaza (ürün olmadan)";
$lang_slider_slide4_title = "Farklı sayfalarda iki ürün";
$lang_slider_slide5_title = "Aynı sayfada iki ürün";
$lang_slider_slide1_text = 
        "<p>ACME Inc. adlı işletmenin http://www.acme.com/ adresinde bir sitesi var. İşletme bir sanal mağazaya sahip ve adresi http://store.acme.com/. Ürünleri ise http://store.acme.com/product/ adresindeki sanal mağazada sergiliyor.</p>
<p>ACME Inc. işletmesine ait RDFa kodlaması, doğrudan http://www.acme.com/ adresindeki sayfaya içine eklenmelidir. Bu tanımlamaların \"hakkımızda\" sayfasına da konulmasında sakınca yoktur. Böylece işletme, herhangi bir anlamsal ağ uygulaması veya arama motoru tarafından http://www.acme.com/#company diye bir URI ile tanımlanacaktır. URI, işletmenin anasayfasının URL adresi (http://www.acme.com/) ve sayfa içinde yerel olarak tanımlanmış Anlamsal Ağ tanımının (#company) birleştirilmesinden oluşur.</p>
<p>Aynı işlemler mağaza ve ürünler için de geçerlidir. Anlamsal Ağ açısından Mağaza URI'si (mağaza tanımlı adresi) http://store.acme.com/#store ve ürün URI'si (ürün tanımlı adresi) http://store.acme.com/product/#offer olacaktır. Mağaza ve ürün sayfalarının içerdikleri RDFa kodları, onları (Mağaza URI'si ve Ürün Uri'sini) işletmenin URI'sine aşağıdan yukarı doğru bağlantılandırır. Kullanılan rev terimi, mağazayı(gr:hasPOS) işletmeyle ve ürünü(gr:offers) işletmeyle (aşağıdan yukarıya) ilişkilendirmektedir.</p>";
$lang_slider_slide2_text = 
        "<p>Aynı işletmeye ait iki mağaza, GoodRelations ile kolayca modellenebilir.</p>
<p>Bu örnek, farklı yerlerde bulunan iki mağazanın (iki farklı alt alan adı altında konumlanmış mağazalar) nasıl tanımlanabileceğini göstermektedir.</p>
<p>Formu doldururken, farklı mağaza/dükkanlara ait sayfa adreslerini (URL'leri), her bir mağaza için doğru biçimde girilmelidir. Bu örnekteki mağaza adreslerinin (URL) sırasıyla http://store1.acme.com/ ve http://store2.acme.com/ olduğunu düşünelim. Her iki mağaza sayfası için üretilecek RDFa kodları, gr:hasPOS özelliğini aşağıdan yukarıya doğru, işletmenin http://www.acme.com/#company URI'sine, -rev- terimi bağlamalıdır. Çevirmenin notu: İşletmenin ana sayfasında -mağaza1 Acme'nindir-, -mağaza2 Acme'nindir- diye tanımlamalar yapmak yerine, her mağaza sayfasında -bu mağaza Acme'nindir- gibi aşağıdan yukarı doğru tanımlama yapmak daha pratiktir. Böylece, mağaza eklenip çıkarılması durumunda, ana sayfadaki tanımlamaları düzeltmek gerekmeyecektir.</p>";
$lang_slider_slide3_text = 
        "<p>Bu örnek iki ayrı mağaza tanımlarının aynı ağ sayfasında nasıl yapılacağını gösterecektir.</p>
<p>Eğer iki mağaza aynı sayfayı paylaşıyorlarsa, her ikisi de aynı URL üzeninde yayınlanmalıdır. Her mağaza için iki ayrı RDfa kodu üretilmeli ve  http://stores.acme.com/ sayfasına kopyalanmalıdır. Uluşturulan iki mağazanın URI'lerindeki çakışmayı engellemek için, aynı olan tanımlayıcılar (#store ve #store) yeniden adlandırılmalıdır. Bu değiştirme işlemi üreteç tarafından yapılmaz, kod elle düzenlenmelidir. Ilk #store tanımlamasını #store1, ikinci #store tanımlamasını #store2 olarak değiştirmeniz yeterlidir.</p>";
$lang_slider_slide4_text = 
        "<p>Bu örnek aynı sayfada bulunan iki ürünün tek bir işletmeyle nasıl ilişkilendirileceğini gösterir. Aslında Slayt 2 de anlatılan yöntemle aynıdır.</p>
    <p>http://store.acme.com/ adresindeki mağazada birden çok ürünün satıldığını varsayalım. Basite indirgemek için mağazanın sadece iki ürün sattığını düşünelim. Mağazada satılan her iki ürünün de ayrı birer ürün sayfası (URL) olsun. Şimdi her iki ürün için de birer RDFa kodu üretin ve ürün sayfalarına (sırasıyla http://store.acme.com/product1/ ve http://store.acme.com/product2/) ekleyin. Ürünler (\"rev gr:offers\" kullanılarak) ürünü satan işletme (Acme) ile (aşağıdan yukarı) bağlantılandırılacaktır. Satıştaki ürünlerin Anlamsal Ağ'daki tanımlamaları http://store.acme.com/product1/#offer ve http://store.acme.com/product2/#offer olacaktır.</p>";
$lang_slider_slide5_text = 
        "<p>Son örnekte de aynı sayfada (URL) satışa sunulan iki ürün anlatılacaktır.</p>
<p>Sanal mağaza senaryosuna benzer bir biçimde, iki ayrı ürünün aynı sayfa üzerinden satıldığını hayal edin. Aynı URL'yi paylaşan bu iki ürünün Anlamsal Ağ tanımlamalarını farklılaştırmak gerekecektir.</p>
<p>Ürünlerin bulunduğu sayfanın (URL), http://store.acme.com/products/ olduğunu farzedin, bu durumda Ürünlere ait URI'ler sırasıyla http://store.acme.com/products/#offer1 ve http://store.acme.com/products/#offer2 olacaktır. Zengin Veri Parçaları Üreteci, her ürün için #offer1 ve #offer2 tanımlamaları yerine iki tane aynı #offer tanımlaması oluşturacağından, bunları #offer1 ve #offer2 olarak elle düzenlemeniz gerekmektedir.</p>";
/* config */
$lang_fillin = "Bu kutu boş bırakılmamalıdır";
$mandatory_field = "<span class=\"mandatory\" title=\"$lang_fillin\">*</span>";
// company, and shop (address)
$lang_conf_legal_name =
        $mandatory_field."İşletmenizin Ticaret Ünvanı (Örnek: ABC Hazır Mobilya ve Dekorasyon Ltd. Şti.)";
$lang_conf_country_name =
        "Ülke";
$lang_conf_locality =
        "Şehir";
$lang_conf_postal_code =
        "Posta kodu";
$lang_conf_street_address =
        "Açık Adres (Mahalle, cadde, sokak, kapı, daire no)";
$lang_conf_tel =
        "Telefon Numarası (Önerilen biçim: +90-123-1234567)";
$lang_conf_company_depiction =
        "İşletme logosu veya resminin internet adresi (Örneğin: http://www.example.com/image.(jpg|png|gif|svg))";
// shop only
$lang_conf_store_name =
        $mandatory_field."Mağaza adı veya yeri";
$lang_conf_store_depiction =
        "Mağaza logosu veya resminin internet adresi (Örnek: http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_latitude =
        "Enlem";
$lang_conf_longitude =
        "Boylam";
$lang_conf_opens_mofr =
        "Hafta içi (Pazartesi - Cuma) açılış saati (Önerilen biçim: 08:30)";
$lang_conf_closes_mofr =
        "Hafta içi (Pazartesi - Cuma) kapanış saati (Önerilen biçim: 16:00)";
$lang_conf_opens_sa =
        "Cumartesi günleri için açılış saati (Önerilen biçim: 08:30)";
$lang_conf_closes_sa =
        "Cumartesi günleri için kapanış saati (Önerilen biçim: 12:00)";
$lang_conf_opens_su =
        "Pazar günleri için açılış saati (Önerilen biçim: 08:30)";
$lang_conf_closes_su =
        "Pazar günleri için kapanış saati (Önerilen biçim: 12:00)";
$lang_conf_page =
        $mandatory_field."İşletmenizin tanımlandığı ana ağ sayfası (mağazalar, ürünler ve hizmetler bu referans noktasına bağlanacak. Örnek: http://www.example.com/)";
// offer
$lang_conf_product_name =
        $mandatory_field."Ürün adı";
$lang_conf_description =
        "Ürünün kısa tanımı";
$lang_conf_lang =
        "Ürün kısa tanımının dili (<br /><a href=\"http://en.wikipedia.org/wiki/ISO_639-1\">ISO 639-1</a> kodlarından birini seçin. Örneğin, Türkçe için \"tr\" veya İngilizce için\"en\")";
$lang_conf_product_page =
        "Ürün sayfasının ağ adresi (Örnek: http://www.example.com/product/)";
$lang_conf_product_depiction =
        "Ürüne ait resmin ağ adresi (Örnek: http://www.example.com/image.(jpg|png|gif|svg))";
$lang_conf_gtin_13 =
        "Ürünün, EAN-13, 13 basamaklı UPC, veya 13 basamaklı ISBN kodu";
$lang_conf_currency =
        "(<br />Üç Harfli <a href=\"http://tr.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> para birimi kodunu seçin. Örneğin, Türk Lirası için \"TRL\", Avro için \"EUR\" veya Amerikan Doları için \"USD\", ve ürün fiyatını girin)";
$lang_conf_price =
        "Ürün veya hizmetin fiyatı";
$lang_conf_validfrom =
        "Ürün fiyatının <strong>geçerlilik başlangıç tarihi</strong> (tarih biçimi: yıl.ay.günTsaat:dakika:saniyeZ ".date("d.m.Y\T00:00:00\Z").")";
$lang_conf_validthrough =
        "Ürün fiyatının <strong>geçerlilik bitiş tarihi</strong> (tarih biçimi: yıl.ay.günTsaat:dakika:saniyeZ ".date("d.m.Y\T23:59:00\Z", mktime(0, 0, 0, date("m"), date("d"), date("Y")+1)).")";

/* index */
$lang_step = "Adım";
$lang_prologue =
        "<h1>Zengin Veri Parçaları Üreteci </h1><div style=\"float:left\"><a href=\"http://purl.org/goodrelations/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logos/gr_banner_small.png\" alt=\"GoodRelations\"/></a></div><div style=\"float:right\"><a href=\"http://www.ebusiness-unibw.org/\"><img src=\"http://www.heppnetz.de/ontologies/goodrelations/logo_researchgroup.png\" alt=\"E-ticaret ve Web Bilim Araştırma Grubu\"/></a></div>
        <div style=\"clear:both; padding-bottom: 12px;\"></div>
        <p>GoodRelations, işletmeniz hakkındaki zengin veri parçalarını, web sayfalarınıza eklemek için basit ama güçlü bir tekniktir. GoodRelations sayesinde, ürün ve hizmetlerinizine ait benzersiz özellikler, yeni nesil arama motorları (Örneğin Google veya Yahoo SearchMonkey), yeni mobil uygulamalar ve tarayıcı eklentileri için daha erişilebilir hale gelir. Ayrıca mevcut arama motorları üzerinde de olumlu etkiler yaratır.</p>
        <p>Ürün ve hizmetlerinize ait bu zengin veri parçalarını, bu üreteç sayesinde W3C RDFa formatında oluşturabilir, buradan kopyalayıp yapıştırarak sayfanıza ekleyebilirsiniz. Çıktıları sayfalarınıza yerleştirin ve sayfa başlığını <a href=\"#mod_header\">aşağıda</a> anlatıldığı gibi XHTML/HTML olarak güncelleyin</p>
        <p>Yaptığınıza değecektir. Basittir. Halen BestBuy tarafından uygulanıyor ve çarpıcı sonuçlar alınıyor.</p>";
$lang_mod_header =
        "Sayfa başlığını XHTML/HTML olarak güncelleme";
$lang_mod_header_p1 =
        "<p>İlgili sayfaların içine zengin veri parçalarını ekledikten sonra, bunların varlığını tarayıcılara bildirmeniz gerekir. Bu işlem oldukça kolaydır:</p>
        <p>GoodRelations RDFa zengin veri parçalarını, XHTML, HTML5, and HTML4 şablonlarında, DOCTYPE belge kiplerindeki farklılıklara rağmen kullanabilirsiniz.</p>";
$lang_mod_header_xhtml =
        "XHTML";
$lang_mod_header_xhtml_li1 =
        "Mevcut belge tipini DOCTYPE, XHTML+RDFa 1.0 olarak değiştirin:";
$lang_mod_header_xhtml_li2 =
        "HTML sürümünü (html version), XHTML+RDFa 1.0 olarak ayarlayın:";
$lang_mod_header_xhtml_li3 =
        "&lt;head&gt; etiketnde, XHTML kodlama için uygun içerik tipinin (Content-Type) tanımlandığından emin olun:";
$lang_mod_header_html5 =
        "HTML5";
$lang_mod_header_html5_li1 =
        "Mevcut belge tipini (DOCTYPE), html yapın:";
$lang_mod_header_html5_li2 =
        "html sürümünü (html version), XHTML+RDFa1.1 olarak ayarlayın:";
$lang_mod_header_html =
        "Diğer HTML türleri";
$lang_mod_header_html_li1 =
        "Diğer HTML türleri için, ya HTML5 yönergelerini kullanın, ya da basitçe html sürümü (html version) özelliğini HTML+RDFa1.1 veya XHTML+RDFa1.0 olarak ayarlayın. Pek çok tarayıcı, bu belge türlerinden, RDF bilgilerini çözümleyecektir.";
$lang_mod_header_html_li2 =
        "veya";
$lang_mod_header_p2 =
        "<p>Özel bildirim hizmetimiz ile size, sayfanıza eklediğiniz GoodRelations içeriğinin yayınlanması ile ilgili yardım edebiliriz. İlgili sayfalarınızın tam adreslerini girmenizin ardından, biz de sayfalarınızı otomatik olarak Bağlantılı Veri (Linked Data) Ağına kaydettirebiliriz. Bu çevrimiçi uygulamaya <a href=\"http://gr-notify.appspot.com/\">buradan</a> ulaşabilirsiniz.</p>";
$lang_additional_resources =
        "İlgili Kaynaklar";
$lang_additional_quickstart =
        "bu sayfadaki uygulamanın kullandığı temel yapının açıklaması.";
$lang_additional_cookbook =
        "özel durumlar için daha karmaşık modeller";
$lang_additional_goodrelations =
        "temel GoodRelations terimleri hakkında bilgi";
$lang_additional_grnotify =
        "yeni nesil anlamsal arama motorlarına GoodRelations içeriğinin sunulması için bildirim hizmeti";
$lang_sourcecode_title =
    "Kaynak kodu";
$lang_sourcecode_content =
    "Bu uygılamanın kaynak kodu LPGL lisansı ile dağıtılmaktadır <a href=\"http://code.google.com/p/grsnippetgen/\">http://code.google.com/p/grsnippetgen/</a>.";
$lang_acknowledgements_title =
    "Teşekkür";
$lang_acknowledgements_content =
    "Bu projenin çevirisinde katkıda bulunanlara teşekkür ederiz. Özer Kavak, Giorgos Alexiou.";
$lang_epilogue =
        "<p><strong>Geliştirici:</strong> Alex Stolz</p>
        <p><strong>Yasal Uyarı:</strong> Bu hizmet Alman Münih Üniversitesi, <a href=\"http://www.unibw.de/ebusiness/\">E-ticaret ve Web Bilim Araştırma Grubu</a> tarafından, hiçbir garanti verilmeden sunulmaktadır. İlgili kurum ve kişiler hiçbir sorumluluk kabul etmez.</p>";
        
/* controller.inc */
$lang_controller_title =
        "Zengin veri parçaları oluşturma: ";
$lang_controller_title_company =
        "İşletmeniz için";
$lang_controller_title_shop =
        "Dükkan veya mağazalarınız için";
$lang_controller_title_offer =
        "Her bir ürün ve hizmet için";
$lang_controller_p1_shop =
        "Bu adım, bir satış noktası tanımlaması yapılacaksa gereklidir.";
$lang_controller_p1_shop_button =
        "İşletmenin adres bilgilerini satış noktasına kopyala";
$lang_controller_p1_offer =
        "Tek tek ürün ve hizmetleri tanımlayıp yayınlamanız durumda, GoodRelations çok etkilidir. Ayrıca, bir çok ürünü barındıran dinamik yapıdaki sanal mağazalar için çok uygundur.";
$lang_controller_geo_desc =
        "Coğrafi Konumu";
$lang_controller_geo_button =
        "Adresten coğrafi konumu belirle";
$lang_controller_select =
        "Seç ...";
$lang_controller_currency =
        "Ürünün para birimi ve fiyatı";
$lang_controller_category =
        "Ürün kategorisi";
$lang_controller_notify_lang_code =
        "Listede tanımlı olmayan bir dil kodunu buraya girebilirsiniz";
$lang_controller_notify_currency_code =
        "Listede tanımlı olmayan bir para birimi kodunu buraya girebilirsiniz";
$lang_controller_notify_price =
        "Ürün fiyatı";
// is placeholder or actual product or service
$lang_controller_prodtype_title = "Anonim Ürün (Örneğin: Birden fazla marka, model ürün içeren setler)";
$lang_controller_prodtype_hint = "(<br />Belirli bir ürün için, kullanılmış ürün bile olsa, Anonim ürün seçeneğini işaretlemeyin.)";
// delivery methods
$lang_controller_deliverymethod_directdownload = "Doğrudan indirilebilir (yazılım)";
$lang_controller_deliverymethod_freight = "Nakliye";
$lang_controller_deliverymethod_mail = "Posta";
$lang_controller_deliverymethod_ownfleet = "Kendi filomuzla";
$lang_controller_deliverymethod_pickup = "Mağazadan teslim";
$lang_controller_notify_deliverymethods = "Uygun reslim yöntemlerini seçin (CTRL + tıklama)";
$lang_controller_deliverymethod_title = "Teslim yöntemleri";
$lang_controller_deliverymethod_hint = "(<br />GoodRelations sisteminde <a href=\"http://purl.org/goodrelations/v1#DeliveryMethod\">varolan tanımlı teslim yöntemleri</a>)";
// business functions
$lang_controller_busfun_constructioninstallation = "İnşaat/Kurulum";
$lang_controller_busfun_dispose = "Ortadan kaldırma / Geri dönüşüm";
$lang_controller_busfun_leaseout = "Kiraya verme";
$lang_controller_busfun_maintain = "Bakım";
$lang_controller_busfun_provideservice = "Hizmet sağlama";
$lang_controller_busfun_repair = "Tamir";
$lang_controller_busfun_sell = "Satış";
$lang_controller_notify_businessfunction = "Ürün için bir işlem seçin (Ürünle ilgili ne yapmak istiyorsunuz?)";
$lang_controller_businessfunction_title = "İşlem";
$lang_controller_businessfunction_hint = "(<br />GoodRelations sisteminde <a href=\"http://purl.org/goodrelations/v1#BusinessFunction\"> varolan tanımlı ürün ve hizmetlerle ilgili işlemler</a>)";
// payment methods
$lang_controller_paymethod_banktransferinadvance = "Peşin banka havalesi";
$lang_controller_paymethod_invoice = "Teslimde banka havalesi";
$lang_controller_paymethod_cash = "Nakit";
$lang_controller_paymethod_checkinadvance = "Sipariş esnasında çek ile";
$lang_controller_paymethod_cashondelivery = "Teslimde nakit olarak";
$lang_controller_paymethod_directdebit = "Otomatik ödeme";
$lang_controller_notify_paymethods =
        "Uygun ödeme yöntemlerini seçin (CTRL + tıklama)";
$lang_controller_paymentmethod_title =
        "Ödeme yöntemleri";
$lang_controller_paymentmethod_hint =
        "(<br />GoodRelations sisteminde <a href=\"http://purl.org/goodrelations/v1#PaymentMethod\">varolan tanımlı ödeme yöntemleri</a>)";
// customer types
$lang_controller_customer_enduser = "Son kullanıcı";
$lang_controller_customer_business = "Kurumsal";
$lang_controller_customer_public = "Kmu kuruluşları";
$lang_controller_customer_reseller = "Bayi";
$lang_controller_notify_customertypes =
        "Uygun müşteri türlerini seçin (CTRL + tıklama)";
$lang_controller_customertype_title =
        "Müşteri Türleri";
$lang_controller_customertype_hint =
        "(<br />GoodRelations sisteminde <a href=\"http://purl.org/goodrelations/v1#BusinessEntityType\">varolan tanımlı müşteri türleri</a>)";
// eligible regions
$lang_controller_notify_eligibleregions =
        "Teklifinizin geçerli olacağı bölge ve ülkeleri seçin (CTRL + tıklama)";
$lang_controller_eligibleregion_title =
        "Geçerli ülke ve bölgeler";
$lang_controller_eligibleregion_hint =
        "(<br /><a href=\"#\" id=\"selectA_CH_D\">Almanya, Avusturya ve İsviçre'yi seç</a><br /><a href=\"#\" id=\"selectEU\">Avrupa Birliği üyelerini seç</a><br /><a href=\"#\" id=\"selectNone\">Seçilenleri temizle</a>)";

$lang_controller_submit_button =
        "Zengin veri parçaları üret";
$lang_controller_allow_logging =
        "Girilen bilgilerin araştırma amaçlı olarak kullanılmak üzere kaydedilmesine izin veriyor musunuz?";
$lang_controller_shop_additional_information =
        "<p>Eğer mağazanızın açık olduğu saatlerle ilgili daha ayrıntılı açıklama yapmak istiyorsanız, gr:OpeningHoursSpecification bölümünü ihtiyaçlarınız doğrultusunda özelleştirebilirsiniz. Ayrıntılı bilgi için <a href=\"http://www.ebusiness-unibw.org/wiki/GoodRelationsQuickstart\">GoodRelations Hızlı Başlangıç Kılavuzu (İngilizce)</a>.</p>
        <p>Tek bir sayfada birden fazla mağaza ile ilgili bilgi veriyorsanız, ilgili kodlamanın bir kopyasını alıp, mağaza sayısı kadar çoğaltın (yapıştırın). Her mağaza için tanımlı öğelerdeki durumları değiştirin. Örneğin, tek mağaza için üretilen kod içinde <em>(#store, #mon_fri, ve #sat)</em> olan değerleri, kopyaladığınız her mağaza için <em>(#store1, #mon_fri1, #sat1)</em>, <em>(#store2, #mon_fri2, #sat2)</em> olacak şekilde değiştirin.</p>";
$lang_controller_offer_additional_information =
        "<p>Tek bir sayfada birden fazla ürün ile ilgili bilgi veriyorsanız, ilgili kodlamanın bir kopyasını alıp, aynı sayfada bulunan ürün sayısı kadar çoğaltın (yapıştırın). Her bir ürün için tanımlı öğelerin adını değiştirin. Örneğin, tek ürün için <em>#offer</em> olan değerleri, kopyaladığınız her ürün için <em>#offer1</em>, <em>#offer2</em> olacak şekilde değiştirin.</p>";

/* error.template */
$lang_error_warning_miss =
        "Değer bulunamadı";
$lang_error_error_depiction =
        "Resme ait girilen adres uygun değil";
$lang_error_error_depiction_desc =
        "Doğru HTTP kodlaması içeren bir adres ve dosya adı girin, örneğin http://www.example.com/image.(jpg|png|gif|svg)";
$lang_error_error_page =
        "Ağ sayfasına ait girilen adres uygun değil";
$lang_error_error_page_desc =
        "Doğru HTTP kodlaması içeren bir adres girin, örneğin http://www.example.com/";
$lang_error_error_hours =
        "Girilen saat değeri uygun değil";
$lang_error_error_hours_desc =
        "Girilen saat değerinin 12:00 gibi bir yapıda olup olmadığını kontrol edin";
$lang_error_error_gtin =
        "Girdi sadece rakamlardan oluşmalı";
$lang_error_error_gtin_desc =
        "En az birt tane geçersiz karakter bulundu. Lütfen gerekli düzeltmeyi yapın";
$lang_error_error_gtin_len =
        "Girilen rakam sayısı 13'ten farklı";
$lang_error_error_gtin_len_desc =
        "Lütfen gerekli düzeltmeyi yapın.";
$lang_error_error_currency =
        "Girilen harf sayısı 3'ten farklı";
$lang_error_error_currency_desc =
        "Daha fazla bilgi için <a href=\"http://tr.wikipedia.org/wiki/ISO_4217\">ISO 4217</a> sayfasını ziyaret edin.";
$lang_error_error_price =
        "Girilen değer sayısal değil";
$lang_error_error_price_desc =
        "Fiyat kısmına lütfen sayısal bir değer girin. Örneğin: 12.99";
$lang_error_error_validity =
        "Girilen gün biçimi uygun değil";
$lang_error_error_validity_desc =
        "Geçersiz tarih biçimi. Gün ve saati içeren geçerli bir tarih girin. Örneğin: 2011-06-30T09:30:10Z";
        
/* output.template */
$lang_output_error =
        "Hata(lar)";
$lang_output_warning =
        "Uyarı(lar)";
$lang_output_warning_supplement =
        "Zengin veri parçaları geçerli, ancak yeterince kullanışlı değil.";
$lang_output_success =
        "Başarılı";
$lang_output_success_company =
        "<p>Tebrikler!<br/>Artık yukarıda oluşturulmuş zengin veri parçaları içeren kodu <strong>işletme ana sayfanıza</strong> ekleyebilirsiniz. Sayfanızda bulunan HTML BODY kapanış etiketinin hemen üzeri, en uygun yerlerden biridir. Artık Adım 2! ye geçebilirsiniz.</p>";
$lang_output_success_shop =
        "<p>Harika!<br/>yukarıdakı kod parçacığını <strong>mağazanızın sayfasına</strong> yapıştırın ve devam edin. Eğer mağazanızın ağ sayfası adresi (URL), işletme ağ sayfanızın adresi ile aynı ise, bu kodu, HTML BODY bitiş etiketinin üzerinde bulunan işletme tanımının içine yerleştirin. ÖNEMLİ: İşletmenizin ağ sayfasının doğru şekilde bağlantılandırıldığından emin olun. (Örneğin: http://www.example.com/#company). Eğer doğru değilse, düzeltin. Daha sonra Adım 3!'e geçebilirsiniz.</p>";
$lang_output_success_offer =
        "<p>Mükemmel!<br/>Ürün veya hizmetinize ait tanım geçerli ve artık <strong>ürüne ait ağ sayfasında</strong> yayınlanmaya hazır. üretilen kodu kopyalayıp, ürün ağ sayfanızda bulunan HTML BODY kapanış etiketinin hemen üzerine yerleştirin. Dördüncü ve son adım olarak da, ağ sayfalarınıza ait başlıkları (page header, head etiketi) güncellemeniz gerekiyor.</p>";
?>
 
