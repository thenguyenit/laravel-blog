<?php

namespace App\Entity;

class Blog
{

    public function paginate()
    {

    }

    public static function detail($year, $slug)
    {
        $filePath = storage_path("app/private/{$year}/{$slug}.md");
        if (is_file($filePath)) {
            $content = \File::get($filePath);

            return [
                'title'      => self::getTitle($slug),
                'avatar'     => self::getAvatar($year, $slug),
                'content'    => $content,
                'created_at' => \File::lastModified($filePath)
            ];
        }
    }

    public static function getTitle($slug)
    {
        $slug = str_replace('-', ' ', $slug);
        return ucfirst($slug);
    }

    public static function getAvatar($year, $slug)
    {
        $filePath = storage_path("app/public/{$year}/{$slug}.jpg");
        if (is_file($filePath)) {
            return asset("storage/{$year}/{$slug}.jpg");
        }
    }
}
