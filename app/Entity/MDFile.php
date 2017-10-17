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
                        $pattern = '/(.*)\\' . DIRECTORY_SEPARATOR . '(\d+)\/(.*).md/';
                        preg_match($pattern, $file, $output);
                        if ($output) {
                            //Description file
                            $descriptionFilePath = $output[1] . DIRECTORY_SEPARATOR . $output[2]  . DIRECTORY_SEPARATOR . $output[3] . ".json";

                            $descriptionFileData = [];
                            if (is_file($descriptionFilePath)) {
                                $desContent = file_get_contents($descriptionFilePath);
                                $descriptionFileData = json_decode($desContent, true);

                                //check status, if draft is continue
                                if (array_get($descriptionFileData, 'status') === false) {
                                    continue;
                                }

                                if (key_exists('created_at', $descriptionFileData)) {
                                    $descriptionFileData['created_at'] =
                                        Carbon::createFromFormat(Carbon::DEFAULT_TO_STRING_FORMAT, $descriptionFileData['created_at']);
                                }
                            }

                            $fileContent = [
                                'title' => self::getTitle($output[3]),
                                'slug' => $output[3],
                                'avatar' => self::getAvatar($output[2], $output[3]),
                                'updated_at' =>  Carbon::createFromTimestamp(\File::lastModified($file))
                            ];

                            $result[$output[2]][] = array_merge($fileContent, $descriptionFileData);
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
                $markdownContent = \File::get($filePath);

                $parseDown = new \Parsedown();
                $content = $parseDown->text($markdownContent);

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
        $filePath = storage_path($this->imagePath . "/{$year}/{$slug}.jpg");
        if (is_file($filePath)) {
            return asset("storage/article/{$year}/{$slug}.jpg");
        }
    }
}
