<?php

function httpGet($url)
{
	$ch = curl_init();
	$timeout = 100;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array("User-Agent: grsnippetgen"));
	$file_contents = curl_exec($ch); // take out the spaces of curl statement!!
	curl_close($ch);
	return $file_contents;
}

function json_decode_nice($json, $assoc = FALSE){
    $json = str_replace(array("\n","\r"),"",$json);
    $json = preg_replace('/([{,])(\s*)([^"]+?)\s*:/','$1"$3":',$json);
    return json_decode($json,$assoc);
}

?>