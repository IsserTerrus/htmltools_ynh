<?php

if (empty($_GET['q'])) die;
$url = $_GET['q'];

$context = stream_context_create(array('http'=>array(
	'user_agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:23.0) Gecko/20100101 Firefox/23.0',
	'timeout' => 20
)));

$data = @file_get_contents($url, false, $context, -1, 10000000); // We download at most 10 Mb from source.
if (!(isset($data) and isset($http_response_header[0]) and (strpos($http_response_header[0], '200 OK') !== FALSE) )) die('error on link');


header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.basename($url));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . mb_strlen($data));
ob_clean();
flush();
echo $data;
exit;

