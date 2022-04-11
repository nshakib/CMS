<?php

namespace App\Http\Controllers;

class LocalizationController extends Controller
{
   //Method 1
    public function switch($language = 'en')
    {
        request()->session()->put('locale', $language);
        return redirect()->back();
    }

   //Method 2
    // public function __invoke($language = 'en')
    // {
    //     request()->session()->put('locale', $language);
    //     return redirect()->back();
    // }
}
