<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleController extends Controller
{
    public function setLocale($lang){
        if (in_array($lang,['en','fr','es','nl','es'])) {
            App::setLocale($lang);
            Session::put('locale',$lang);
        }
        return back();
    }
}
