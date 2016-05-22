<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;



class ProfileImageController extends Controller
{
    public function downloadImage($pname)
    {
        $fileName=storage_path()."/profileimages/$pname";
        if (File::exists($fileName))
        {
            
        }
        else
        {
            return ['no hola'];
        }
    }
}
