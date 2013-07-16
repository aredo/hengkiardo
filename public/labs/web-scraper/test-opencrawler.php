<?php
require_once 'openCrawler.php';
$OpenCrawler = new OpenCrawler();
$OpenCrawler -> loadUrl('http://www.wego.co.id/berita/pantai-pok-tunggal-permata-baru-gunung-kidul-yogyakarta/');

// magic things...

// Debug informations
echo '<pre>';
print_r($OpenCrawler);
?>