<?php

namespace App\Entity;

class Product extends MDFile
{
    public $mdPath = 'app' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'product';
    public $imagePath = 'app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'product';
    public $imageAsset = 'storage' . DIRECTORY_SEPARATOR . 'product';
}
