<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Color;
use App\RegisteredCar;
use Auth;

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
        $brands = Brand::all();
        $colors = Color::all();
        $myCars = RegisteredCar::leftJoin('brands', 'registered_cars.brand_id', '=', 'brands.id')
                                ->leftJoin('colors', 'registered_cars.color_id', '=', 'colors.id')
                                ->select('brand', 'color', 'number')
                                ->where('user_id', '=', Auth::user()->id)
                                ->get();
        return view('home', ['brands' => $brands, 'colors' => $colors, 'myCars' => $myCars]);
    }

    public function addNewCar(Request $request) 
    {
        $car = new RegisteredCar;
        $car->user_id = Auth::user()->id;
        $car->brand_id = $request->brand_id;
        $car->color_id = $request->color_id;
        $car->number = $request->number;
        $car->save();
        return back()->withInput(); 
    }
}
