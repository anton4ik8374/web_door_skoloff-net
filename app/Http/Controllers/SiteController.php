<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Price;
use App\Models\Gallery;



class SiteController extends Controller
{
    public function index()
    {
        $data['script'] = [
            'js/jquery.js',
            'js/plugins.js',
            'js/functions.js',
        ];
        $data['style'] = [
            'css/canvas/bootstrap.css',
            'css/canvas/style.css',
            'css/canvas/swiper.css',
            'css/canvas/dark.css',
            'css/canvas/font-icons.css',
            'css/canvas/animate.css',
            'css/canvas/magnific-popup.css',
            'css/canvas/responsive.css',
        ];

        $data['menu'] = Menu::where('activ', '=', 1)->get();
        $data['slider'] = Slider::all();
        $data['sponsor'] = Sponsor::where('activ', '=', 1)->get();;
        $data['gallery'] = Gallery::inRandomOrder()->limit(9)->get();
       //dd($data);
        return view('home', compact('data'));
    }

    public function contacts()
    {
        $data['script'] = [
            'js/jquery.js',
            'js/plugins.js',
            'js/functions.js',
            'https://api-maps.yandex.ru/2.1/?apikey=AJU3L1wBAAAA0k08EAIAf7zVOvmVLmtdMNgRWfYyfiOMWgYAAAAAAAAAAAAQnLHJ_qYnQLlhcpOxBDrk3TmU8Q==&lang=ru_RU',
            'js/ya.js',
        ];
        $data['style'] = [
            'css/canvas/bootstrap.css',
            'css/canvas/style.css',
            'css/style.css',
            'css/canvas/swiper.css',
            'css/canvas/dark.css',
            'css/canvas/font-icons.css',
            'css/canvas/animate.css',
            'css/canvas/magnific-popup.css',
            'css/canvas/responsive.css',
        ];
        $data['menu'] = Menu::where('activ', '=', 1)->get();
        $data['slider'] = Slider::all();
        // self::root($data);
        return view('contacts', compact('data'));
    }

    public function price()
    {
        $data['script'] = [
            'js/jquery.js',
            'js/plugins.js',
            'js/functions.js',
        ];
        $data['style'] = [
            'css/canvas/bootstrap.css',
            'css/canvas/style.css',
            'css/canvas/swiper.css',
            'css/canvas/dark.css',
            'css/canvas/font-icons.css',
            'css/canvas/animate.css',
            'css/canvas/magnific-popup.css',
            'css/canvas/responsive.css',
        ];
        $data['menu'] = Menu::where('activ', '=', 1)->get();
        $data['slider'] = Slider::all();
        $data['price'] = Price::where('activ', '=', 1)->get();
        // self::root($data);
        return view('price', compact('data'));
    }

    public function ourwork()
    {
        $data['script'] = [
            'js/jquery.js',
            'js/plugins.js',
            'js/functions.js',
        ];
        $data['style'] = [
            'css/canvas/bootstrap.css',
            'css/canvas/style.css',
            'css/canvas/swiper.css',
            'css/canvas/dark.css',
            'css/canvas/font-icons.css',
            'css/canvas/animate.css',
            'css/canvas/magnific-popup.css',
            'css/canvas/responsive.css',
        ];
        $data['menu'] = Menu::where('activ', '=', 1)->get();
        $data['slider'] = Slider::all();
        $data['gallery'] = Gallery::all();
        //self::root($data['galery']);

        return view('ourwork', compact('data'));
    }

    public static function sort($galery)
    {

        $result =array();

        foreach ($galery as $value ){
            if(isset($result[$value->groop])){
                $result[$value->groop]['file'][$value->id]= $value->file;
            }else{
                $result[$value->groop]['name']=$value->name;
                $result[$value->groop]['groop']= $value->groop;
                $result[$value->groop]['brand']= $value->brand;
                $result[$value->groop]['model']= $value->model;
                $result[$value->groop]['file'][$value->id]= $value->file;
            }
        }
        return $result;

    }

}
