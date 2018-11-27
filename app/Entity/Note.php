<?php

namespace App\Entity;

class Note extends MDFile
{
    public $mdPath = 'app' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'note';
    public $imagePath = 'app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'note';
    public $imageAsset = 'storage' . DIRECTORY_SEPARATOR . 'note';
}
