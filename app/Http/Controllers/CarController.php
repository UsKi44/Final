<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(){
        $data = Car::all();

        return view('index',compact('data'));
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
}
