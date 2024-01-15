<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(): \Illuminate\Contracts\Support\Renderable
    {
//        $lang = $request->negotiateLanguage();
//        if (!in_array($lang, ['ru', 'en'])) {
//            $lang = 'en';
//        }

        // Устанавливаем язык приложения
//        App::setLocale($lang);
        $currentLang = 'en'; // установите нужное значение
        // Возвращаем представление с указанным языком
        //return view('welcome', ['lang' => $lang]);
        return view('welcome',compact('currentLang'));

    }

//    public function changeLang(Request $request)
//    {
//        // сохранить значение языка в сессии
////        session(['lang' => $request->lang]);
//
//        // возвращать представление или данные в зависимости от выбранного языка
//        if ($request->lang === 'ru') {
//            return view('welcome', ['lang' => 'ru']);
//        } else {
//            return view('welcome', ['lang' => 'en']);
//        }
//    }
    public function changeLang(Request $request)
    {
        $currentLang = $request->input('currentLang');
        // Дополнительная обработка при необходимости

        return back()->withInput(compact('currentLang'));
    }
//    public function welcome()
//    {
//        $currentLang = 'en'; // установите нужное значение
//        return view('welcome', compact('currentLang'));
//    }
}
