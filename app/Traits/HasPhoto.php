<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasPhoto
{

  public function updatePhoto($modelProperty, UploadedFile $file, $storagePath)
  {
    tap($this->{$modelProperty}, function ($old) use ($modelProperty, $file, $storagePath) {
      
      // Save the file in the hdd
      $this->{$modelProperty} = Storage::put($storagePath, $file);
    
      if ($old) {
        // Erase the old file if exists
        Storage::delete($old);
      }
    });
  }
}