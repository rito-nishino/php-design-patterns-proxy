<?php

namespace App\Proxy;

use App\Interfaces\ImageInterface;
use App\Item\Image;
use App\Subject\RealImage;

class ProxyImage implements ImageInterface
{
    private $image;

    public function __construct(Image $image)
    {
        $this->image = $image;
    }

    public function ImageInfo()
    {
        echo sprintf("画像名：%s<br>画像パス：%s", $this->image->getName(), $this->image->getPath());
    }

    public function ImageDisplay()
    {
        $real = new RealImage($this->image);
        $real->ImageDisplay();
    }
}