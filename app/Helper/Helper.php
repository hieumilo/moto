<?php

namespace App\Helper;

class Helper
{
    public static function upload($file)
    {
        $fileName = time() . '_' . rand (10000000, 99999999) . '.' . $file->getClientOriginalExtension();
        $file->move('public/images/', $fileName);

        return env('APP_URL') . 'public/images/' . $fileName;
    }
}
