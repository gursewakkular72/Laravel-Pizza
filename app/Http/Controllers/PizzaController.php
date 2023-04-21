<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pizza; 

class PizzaController extends Controller
{
   
    public function index() {
            return view('welcome');
    }

    public function show() {
        $pizzas = Pizza::all(); 
        error_log($pizzas);
        return view('allpizzas', ['pizzas'=>$pizzas]); 
    }

    public function create() {
        return view('create'); 
    }

    public function details($id) {
        error_log('details executed'); 
        $pizza = Pizza::findorFail($id); 
        return view('details', ['pizza'=>$pizza]); 
    }

    public function store() {
        $pizza = new Pizza(); 
        $pizza->name = request('name'); 
        $pizza->type = request('type'); 
        $pizza->base = request('base'); 
        $pizza->save(); 
        return  redirect('/')->with('mssg', 'Thank you for your order'); 
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/allpizzas')->with('msg',"Your order has been completed");
      }

   
}


