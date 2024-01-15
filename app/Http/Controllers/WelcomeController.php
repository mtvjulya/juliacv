<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class WelcomeController extends Controller
{
//    public function index(): \Illuminate\Contracts\Support\Renderable
//    {
////        $lang = $request->negotiateLanguage();
////        if (!in_array($lang, ['ru', 'en'])) {
////            $lang = 'en';
////        }
//
//        // Устанавливаем язык приложения
////        App::setLocale($lang);
//        $currentLang = 'en'; // установите нужное значение
//        // Возвращаем представление с указанным языком
//        //return view('welcome', ['lang' => $lang]);
//        return view('welcome',compact('currentLang'));
//
//    }
    public function index(Request $request)
    {
//        $lang = $request->getPreferredLanguage(['ru', 'en']);
//        if (!in_array($lang, ['ru', 'en'])) {
//            $lang = 'en';
//        }
//
//        // Устанавливаем язык приложения
//        App::setLocale($lang);
//        $currentLang = $lang;
        $currentLang = 'en';
        return view('welcome', compact('currentLang'));
    }
    public function changeLang(Request $request)
    {
        $currentLang = $request->input('currentLang');
        // Дополнительная обработка при необходимости

        return back()->withInput(compact('currentLang'));
    }
}
