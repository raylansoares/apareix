<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageRepository
{
    public function saveImage($image, $id, $type, $import, $size)
    {
        if (!is_null($image))
        {
            $file = $image;
            $extension = $image->getClientOriginalExtension();

            if($import == true) {
                $fileName = $id .'.' . $extension;
            } else {
                $fileName = time() . random_int(100, 999) .'.' . $extension;
            }

            if ($type == 'gallery') {
                $destinationPath = public_path('images/products/'.$id.'/gallery/');
                $url = 'http://'.$_SERVER['HTTP_HOST'].'/images/products/'.$id.'/gallery/'.$fileName;
            } else {
                $destinationPath = public_path('images/'.$type.'/'.$id.'/');
                $url = 'http://'.$_SERVER['HTTP_HOST'].'/images/'.$type.'/'.$id.'/'.$fileName;
            }

            $fullPath = $destinationPath.$fileName;

            if (!file_exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0775);
            }

            $image = Image::make($file)
                ->resize($size, null, function ($constraint) {
                    $constraint->aspectRatio();
                })
                ->encode('jpg');
            $image->save($fullPath, 100);

            return $url;

        } else {
            return 'http://'.$_SERVER['HTTP_HOST'].'/images/'.$type.'/placeholder300x300.jpg';
        }
    }

    public function base64toImage($image64, $type)
    {
        $fileDecode = base64_decode($image64);
        $fileName   = time() . '.jpg';

        $destinationPath = public_path('images/'. $type . '/' . $fileName);

        Image::make($fileDecode)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->encode('jpg')->save($destinationPath, 100);

        return 'http://'.$_SERVER['HTTP_HOST'].'/images/'. $type.'/'.$fileName;
    }
}