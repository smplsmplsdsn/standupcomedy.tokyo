<?php
$dir = __DIR__;
$files = glob($dir . '/../../functions/common/*.php');

foreach ($files as $file) {
  include_once $file;
}

$images = getGalleryImages($dir . '/../../assets/gallery/2026-04-23', $dir . '/../..');

echo json_encode($images);