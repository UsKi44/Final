<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index(){
        $Auth = Auth::check();
        return view('index',compact('Auth'));
    }


    public function add_car(){
        $data = Car::all();

        return view('add_car',compact('data'));
    }



    public function create(Request $request){
        $make=$request['make'];
        $model=$request['model'];
        $produced_on=$request['produced_on'];

        Car::create([
           'make'=> $make,
            'model'=>$model,
            'produced_on'=>$produced_on
        ]);

        return redirect()->back();

    }
    public function delete($id){
        $car = Car::findOrfail($id);
        $car->delete();

        return redirect()->back();
    }
    public function edit(){
        return view('/edit');
    }
}
