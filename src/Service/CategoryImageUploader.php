<?php

namespace App\Service;

class CategoryImageUploader
{
    const PUBLIC_PATH = "/uploads/category-images/";
    const COMPLETE_PATH = __DIR__."/../../public".self::PUBLIC_PATH;

    public function uploadImage(array $file): string
    {
        $filename = uniqid($file["name"], true) . '.jpg';
        move_uploaded_file($file["tmp_name"], self::COMPLETE_PATH.$filename);
        return $filename;
    }
}