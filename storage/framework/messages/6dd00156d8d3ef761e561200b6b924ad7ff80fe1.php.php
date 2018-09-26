<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Xinax\LaravelGettext\Facades\LaravelGettext;

class LanguageController extends Controller
{
    public function setLanguage($locale)
    {
        $data = array();
        $data['locale'] = $locale;

        $validator = Validator::make($data, [
            'locale'=>'required|string|max:5',
        ]);

        if ($validator->fails()) {
            return redirect()->back();
        }

        LaravelGettext::setLocale($locale);
        session(['locale' => $locale]);

        if (!Auth::guest()) {
            Auth::user()->update([
                'locale' => $locale
            ]);
        }

        return redirect()->back();
    }
}
