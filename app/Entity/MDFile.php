<?php

namespace App\Entity;

use Carbon\Carbon;

class MDFile
{
    /**
     * Paginate all article by year
     *
     * @return array
     */
    public function paginate()
    {
        $folderPath = storage_path($this->mdPath);

        $result = \Cache::remember($folderPath, 60, function() use ($folderPath) {
            $result = [];
            foreach (\File::directories($folderPath) as $directory) {

                if (is_dir($directory)) {
                    foreach (\File::files($directory) as $file) {
                        $pattern = '/(.*)\/(\d+)\/(.*).md/';
                        preg_match($pattern, $file, $output);
                        if ($output) {
                            $result[$output[2]][] = [
                                'title' => self::getTitle($output[3]),
                                'slug' => $output[3],
                                'avatar' => self::getAvatar($output[2], $output[3]),
                                'created_at' =>  Carbon::createFromTimestamp(\File::lastModified($file))
                            ];
                        }
                    }
                }
            }

            return $result;
        });

        return $result;
    }

    /**
     * Get detail of article by year and slug
     *
     * @param $year
     * @param $slug
     * @return array
     */
    public function detail($year, $slug)
    {
        $filePath = storage_path($this->mdPath . "/{$year}/{$slug}.md");

        $result = \Cache::remember($filePath, 60, function() use ($filePath, $slug, $year) {
            if (is_file($filePath)) {
                $content = \File::get($filePath);

                return [
                    'title'      => self::getTitle($slug),
                    'avatar'     => self::getAvatar($year, $slug),
                    'content'    => $content,
                    'created_at' => Carbon::createFromTimestamp(\File::lastModified($filePath))
                ];
            }
        });

        return $result;
    }

    /**
     * Get title of article by slug
     *
     * @param $slug
     * @return string
     */
    protected static function getTitle($slug)
    {
        $slug = str_replace('-', ' ', $slug);
        return ucfirst($slug);
    }

    /**
     * Get avatar of article by year and slug
     *
     * @param $year
     * @param $slug
     * @return string
     */
    protected function getAvatar($year, $slug)
    {
        $filePath = storage_path($this->mdPath . "/{$year}/{$slug}.jpg");
        if (is_file($filePath)) {
            return asset("storage/article/{$year}/{$slug}.jpg");
        }
    }
}
