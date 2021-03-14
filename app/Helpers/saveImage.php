<?php

use App\Classes\ImageHelper;
use Symfony\Component\HttpFoundation\File\UploadedFile;


if (!function_exists('save_image')) {
    function save_image(UploadedFile $file = null, $width = null, $height = null, $path, Closure $callback = null)
    {
        if (empty($file))
            return NULL;
        return (new ImageHelper)->uploadImage($file, $width, $height, $path);
    }
}

if (!function_exists('delete_image')) {
    function delete_image($fileName = null, $path = null)
    {
        $path = $path . $fileName;
        if (\File::exists($path))
            \File::delete($path);
        else
            return NULL;
    }
}