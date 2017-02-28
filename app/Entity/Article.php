<?php

namespace App\Entity;

class Article extends MDFile
{
    public $mdPath = 'app' . DIRECTORY_SEPARATOR . 'private' . DIRECTORY_SEPARATOR . 'article';
    public $imagePath = 'app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'article';
}
