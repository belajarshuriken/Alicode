<?php
error_reporting(0);
include '../fungsi.php';
include '../pengaturan.php';
header('Content-type: application/xml; charset="ISO-8859-1"', true);

$c = file($data, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$mapx = '<?xml version="1.0" encoding="UTF-8"?>'."\r\n";
$mapx .= '<sitemapindex
      xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
      xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
      xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
      http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\r\n";


	for ($x = 1; $x <= 10; $x++){

	if(!empty($x)) {
		$mapx .= '<sitemap>
		  <loc>'.$sslsitemap.''.$_SERVER["HTTP_HOST"].'/prod_'.$x.'.xml</loc>
		</sitemap>'."\r\n";
	}
}
$mapx .= '</sitemapindex>';
echo $mapx;
exit;
?>