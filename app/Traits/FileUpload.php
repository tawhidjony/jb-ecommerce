<?php
namespace App\Traits;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;

trait FileUpload {

    public function StoreFile($InputFile, $FilePath){
        if ($InputFile) {
            $path = Storage::putFile($FilePath, $InputFile);
            return  $path;
        }else{
            return '';
        }
    }

    public function UpdateFile($InputFile, $DeleteImg, $ImagePath){
        if ($InputFile) {
            $path = Storage::putFile($ImagePath, $InputFile);
            if ($path) {
                if (isset($DeleteImg)) {
                    Storage::delete($DeleteImg);
                }
            }
        }
        return  $path;
    }

    public function DeleteFile($DeleteImg){
        if (isset($DeleteImg)) {
            Storage::delete($DeleteImg);
        }
    }

}
