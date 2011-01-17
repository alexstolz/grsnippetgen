function fill_vcard() {
	company = document.getElementById("company_master");
	shop = document.getElementById("shop_master");
	for (var i=0; i<company.length-1; i++) {
		for (var j=0; j<shop.length-1; j++) {
			if(company.elements[i].id.replace("company_", "") == shop.elements[j].id.replace("shop_", "")) {
				shop.elements[j].value = company.elements[i].value;
			}
		}
	}
}

function swap_logging(id) {
	clog = document.getElementById('company_logging_allowed');
	slog = document.getElementById('shop_logging_allowed');
	olog = document.getElementById('offer_logging_allowed');
	self = document.getElementById(id);
	
	self.checked = !self.checked;
	clog.checked = !clog.checked;
	slog.checked = !slog.checked;
	olog.checked = !olog.checked;
	
	self.value = self.checked;
}

var map;
var infowindow = new google.maps.InfoWindow();

function codeAddress() {
	var geocoder = new google.maps.Geocoder();
	if(document.getElementById("shop_street_address").value==""||document.getElementById("shop_locality").value==""||document.getElementById("shop_country_name").value=="") {
		alert("Cannot determine latitude/longitude values. First, at least country, city and street address have to be filled in.");
		return false;
	}
	var address = document.getElementById("shop_street_address").value+", "+
		document.getElementById("shop_postal_code").value+" "+
		document.getElementById("shop_locality").value+", "+
		document.getElementById("shop_country_name").value;
	if (geocoder) {
		geocoder.geocode( { 'address': address }, function(results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				var lat = results[0].geometry.location.lat();
				var lng = results[0].geometry.location.lng();
				var latlng = new google.maps.LatLng(lat, lng);
				var moptions = {
					zoom: 9,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				document.getElementById("map_canvas").style.height = "300px";
				map = new google.maps.Map(document.getElementById("map_canvas"), moptions);
				document.getElementById("shop_latitude").value = lat;
				document.getElementById("shop_longitude").value = lng;
				var geo_string = "";
				for(var i=0; i<Math.min(results[0].address_components.length, 8); i++)
					geo_string += results[0].address_components[i].short_name+"<br/>";
				document.getElementById("geo_string").innerHTML = "<span style=\"font-size:11px;color:green;\"><strong>found geocode position for:</strong><br/><br/>"+geo_string+"</span>";
				map.setCenter(latlng);
				infowindow.setContent(results[0].address_components[0].short_name+", "+results[0].address_components[1].short_name);
				infowindow.setPosition(latlng);
				infowindow.open(map);
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
	}
}

