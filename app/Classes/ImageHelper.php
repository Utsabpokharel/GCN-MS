<?php

namespace App\Classes;

use Image;
use File;
use Closure;
use Intervention\Image\Constraint;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ImageHelper
{
	public  function uploadImage(UploadedFile $file,$width=null,$height=null,$path=null,Closure $callback = null)
	{
		if (!File::exists($path))
		{
			File::makeDirectory($path, 0755, true, true);
		}

		if ($callback) {
            $fileName = $callback();
        } else {
            $fileName = (new self)->getFileName($file);
        }


     	$img=(new self)->makeImage($file);
     	$img=(new self)->resizeImage($img,$width,$height);
     	(new self)->savedImage($img,$fileName,$path);

     	return $fileName;

	}


	protected function getFileName(UploadedFile $file)
    {
        $filename = $file->getClientOriginalName();
        $filename = date('Ymd_His') . '_' . strtolower(pathinfo($filename, PATHINFO_FILENAME)) . '.' . pathinfo($filename, PATHINFO_EXTENSION);

        return $filename;
    }

    protected function makeImage(UploadedFile $file)
    {
        return Image::make($file);
    }

    protected function resizeImage(\Intervention\Image\Image $img, $width,$height)
    {
        $img->resize($width,$height, function (Constraint $constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        return $img;
    }

    protected function savedImage($img, $fileName, $path)
    {
        $img->save(public_path($path . $fileName));
    }


}
