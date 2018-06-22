<?php

namespace App\Http\Controllers;

use App\Dog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userid = Auth::user()->id;
        $dog = Dog::where('user_id',$userid)->first();

        return view('home',compact('dog'));
    }

    public function calculateFood()
    {
        $userid = Auth::user()->id;
        $dog = Dog::where('user_id',$userid)->first();

        return view('food_calculate',compact('dog'));
    }

    public function createDog()
    {
        return view('create_dog');
    }

    public function storeDog(Request $request)
    {
        $dog = new Dog();
        $dog->race    = $request->breed;
        $dog->age     = $request->age;
        $dog->weight  = $request->weight;
        $dog->user_id = Auth::user()->id;

        $dog->save();
        return redirect('home');
    }

    public function math(Request $request)
    {
        $kg = $request->weight * 100;
        $gain = 0;
        $lose = 0;
        $fit = 0;

        if ($request->option == 'gain')
        {
            $gain = $kg * 0.015;
        }elseif($request->option == 'lose')
        {
            $lose = $kg * 0.008;
        }else{
            $fit = $kg * 0.01;
        }

        return view('calculated',compact('gain','lose','fit'));
    }
}
