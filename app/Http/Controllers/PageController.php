<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Message;
use Illuminate\Support\Facades\Mail;
use App\Models\Reservation;
use App\Models\Slider;
use App\Models\sliderPhoto;
use App\Models\About;
use App\Models\Meal;
use App\Models\Team;


class PageController extends Controller
{
    public function home()
    {
        $sliders=Slider::where('id','=',1)->first();
        $slider_photos=sliderPhoto::all();

        $item=About::where('status','=', 1)->first();
        $about_special=Meal::where('status', '=', 1)->limit(3)->get();

        $specials=Meal::where('status', '=', 1)->paginate(2);


        $menu_breakfast=Meal::where('meal_id', '=', 1)->get();
        $menu_lunch=Meal::where('meal_id', '=', 2)->get();
        $menu_dinner=Meal::where('meal_id', '=', 3)->get();

        $comments=Reservation::where('status', 1)->get();

        $teams=Team::paginate(3);


        return view('home',compact('sliders', 'slider_photos', 'item', 'about_special', 'specials','menu_breakfast','menu_lunch','menu_dinner','comments','teams'));
    }
    public function about(){

        $about_special=Meal::where('status', '=', 1)->limit(3)->get();
        $item=About::where('status', 1)->limit(1)->first();
        return view('pages.about', compact('item', 'about_special' ));
    }
    public function dish(){
        $specials=Meal::where('status', '=', 1)->paginate(4);

        return view('pages.dish', compact('specials' ));
    }

    public function menu(){

        $menu_breakfast=Meal::where('meal_id', '=', 1)->get();
        $menu_lunch=Meal::where('meal_id', '=', 2)->get();
        $menu_dinner=Meal::where('meal_id', '=', 3)->get();

        return view('pages.menu', compact('menu_breakfast','menu_lunch','menu_dinner'));
    }
    public function team(){
        $teams=Team::paginate(6);

        return view('pages.team', compact('teams' ));
    }
    public function reservation(){
        $comments=Reservation::where('status', 1)->get();

        return view('pages.reservation', compact('comments' ));
    }



    public function contact(Request $request){
        if ($request->isMethod('GET')) {
            return view('contact');
        }else{
            $message=<<<TEXT
                Murojaat qoldirildi!
                Murojaat qoldirgan shaxs ismi: {$request->name}
                Murojaat qoldirgan shaxs telefoni: {$request->phone}
                Murojaat qoldirgan shaxs emaili: {$request->email}
                Murojaat qoldirgan shaxs: {$request->person}
                Murojaat qoldirgan shaxs xabari: "{$request->message}"
            TEXT;
            $apiToken="2099151072:AAEyFEGlva5ht3VJxiIPY6e9zCqItPbuR8s";
            $dataT=[
                'chat_id' => '-1001768281254',
                'text' => $message,
            ];
            $response=file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .http_build_query($dataT));
            // $data=$request->all();
            // Mail::to('abduhalimabdulkhamidov@gmail.com')->send(new Message($data));
            // Reservation::create($request->all());
                return redirect()->route('home')->with('message', 'Murojaatingiz qoldirildi.');
                // bot token: 2099151072:AAEyFEGlva5ht3VJxiIPY6e9zCqItPbuR8s
                // chat id: -1001768281254
        }
    }
}
