<?php

namespace App\Modules\Services\Portal;

use App\Http\Resources\Portal\UploadResource;
use App\Models\Upload;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use League\Flysystem\Config;

class UploadService
{
    /**
     * Сохранение файла в системе и хранить в бд запись о файле
     */
    public function saveFile($file, bool $is_static = false)
    {
        $unique_name = $file->hashName(); // Generate a unique, random name...
        $extension = $file->extension(); // Determine the file's extension based on the file's MIME type...
        $path = $this->generatePath($is_static, $extension);
        $uuid = Str::orderedUuid();
        $adapter = File::streamUpload($path, $unique_name, $file);
        $url = $adapter->publicUrl($unique_name, new Config());
        $upload = Upload::create([
            "uuid" => $uuid,
            "path" => $path,
            "url" => $url,
            "extension" => $extension
        ]);
        return new UploadResource($upload);
    }

    /**
     * Генерация пути для сохранение файлов
     */
    private function generatePath(bool $is_static = false, string $extension = null)
    {
        switch($extension){
            case "jpg":
            case "jpeg":
            case "png":
            case "gif":
                $type = "images";
                break;
            default:
                $type = "other";
                break;
        }
        $direction = $is_static ? "static": "dynamic";
        return $direction."/{$type}/".date("Y/m/d");
    }
}
