<?php
require_once "lib\Michelf\Markdown.inc.php";
require_once "lib\Michelf\MarkdownExtra.inc.php";

$path_source = "rapport.md";
$path_output = "html/";

echo "Scanning directory ...\n";
$to_process = glob($path_source);
natsort($to_process);
echo " Done!\n";

echo "Processing files\n";
$header_html = '<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet">
</head>
<div class="container">';

date_default_timezone_set('America/Montreal');
$now = new Datetime('now');
$now = $now->format('Y-m-d à H:i:s');

$footer = "<p>Site généré le $now </p><p>Justin Duplessis</p><p>Fait avec <a href='http://daringfireball.net/projects/markdown/' >Markdown</a> et <a href='http://getbootstrap.com/'>Bootstrap</a> </p></div></html>";

foreach ($to_process as $file) {
	$time_start = round(microtime(true) * 1000);
	$f_name = basename($file, ".md");
	echo "$f_name...";
	$markdown = file_get_contents($file);

	$html_body = Michelf\MarkdownExtra::defaultTransform($markdown);
	$out = "$path_output$f_name.html";
	file_put_contents( $out,"$header_html$html_body$footer");
	$time_end = round(microtime(true) * 1000);
	$ms = $time_end - $time_start;
	echo " done. Took $ms ms\n";
}
echo "Everyhting looks ok!\n";
?>