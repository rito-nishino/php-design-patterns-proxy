<?php

namespace App\Subject;

use App\Interfaces\ImageInterface;
use App\Item\Image;

class RealImage implements ImageInterface
{
    private $image;
    private $content;

    public function __construct(Image $image)
    {
        $this->image = $image;
        $this->content = base64_encode(file_get_contents($image->getPath()));
    }

    public function ImageInfo()
    {
        echo sprintf("画像名：%s<br>画像パス：%s", $this->image->getName(), $this->image->getPath());
    }

    public function ImageDisplay()
    {
        echo sprintf("<img src='data:image/png;base64,%s' width='300' height='auto'>", $this->content);
    }
}