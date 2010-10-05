function reload(template_uri)
{
	var http_request = false;
	if(window.XMLHttpRequest)
		http_request = new XMLHttpRequest();
	else if(window.ActiveXObject) {
		try {
			http_request = new ActiveXObject('Msxml2.XMLHTTP');
		} catch (ex) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (ex) { alert("Could not instantiate XML HTTP request object"); return false; }
		}
	}
	
	document.getElementById(template_uri+'_snippet').innerHTML = "<p style=\"text-align:center\"><img src=\"images/load.gif\" alt=\"... loading\" /></p><p style=\"text-align:center; font-size:11px; color:#666\">If loading takes significantly longer than a few seconds, please press the upper button again.</p>";
	
	var url = "templates/"+template_uri+".template.php";
	var params = "";//"date="+encodeURI(date);
	
	var x = document.getElementById(template_uri+"_master");
	for (var i=0; i<x.length-1; i++) {
		if(x.elements[i].type == 'select-multiple') {
			var select = x.elements[i];
			for(var j=0; j<select.options.length; j++) {
				if(select.options[j].selected) {
					params += encodeURIComponent(select.name)+"="+encodeURIComponent(select.options[j].value)+"&";
				}
			}
		}
		else
			params += encodeURIComponent(x.elements[i].id)+"="+encodeURIComponent(x.elements[i].value)+"&";
	}
	http_request.open("POST",url,true);
	http_request.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	http_request.setRequestHeader("Content-length", params.length);
	http_request.setRequestHeader("Connection", "close");
	http_request.send(params);
	http_request.onreadystatechange = function()
	{
		if(http_request.readyState == 4)
		{
			if(http_request.status == 200)
			{
				var parentElement = document.getElementById(template_uri+'_snippet');
				var wrappingDiv = document.createElement('div');
				wrappingDiv.id = template_uri+"_rdfa";
				wrappingDiv.innerHTML = http_request.responseText;
				parentElement.innerHTML = "";
				parentElement.appendChild(wrappingDiv);
			}
			else
			{
				alert("Error code "+http_request.status);
			}
		}
	}
}
