<?php
require_once 'autoload.php';

use App\Item\Image;
use App\Proxy\ProxyImage;

$image = new ProxyImage(new Image('サンプル画像', 'images/sample.jpg'));

// 画像情報の出力
$image->ImageInfo();

echo '<hr>';

// 画像の表示
$image->ImageDisplay();