<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function welcom()
    {
        return view('welcome');
    }

    public function index()
    {
        $pizzas =Pizza::all();
        return view('pizza.index', ['pizzas' => $pizzas]);
    }

    public function show($id)
    {   
        $pizza=Pizza::findOrFail($id);
        return view('pizza.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizza.create');
    }

    public function store(){
        $pizza=new Pizza();

        $pizza->name=request('name');
        $pizza->type=request('type');
        $pizza->base=request('base');
        $pizza->toppings=request('toppings');
        
        $pizza->save();

       return redirect('/')->with('massege','Thanks for your order');
    }

    public function destroy($id){

        $pizza=new Pizza();
        $order=$pizza->findOrFail($id);
        $order->delete();
        return redirect('/pizzas');
    }

}
