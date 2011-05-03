<?php
// wikipedia search
include_once("utils.php");

$word = urlencode($_GET["term"]);
if(empty($word)) {
	$word = "Test";
}
$url = "http://en.wikipedia.org/w/api.php?action=opensearch&search=$word&limit=10&format=json";
$content = httpGet($url);
$json = json_decode_nice($content);

echo json_encode($json[1]);
?>
