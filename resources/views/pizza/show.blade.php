@extends('layouts.app')
@section('content')

<h1> Order for {{$pizza['name']}}</h1>
<div>
<ul>
Type : {{$pizza['type']}}<br>
Base : {{$pizza['base']}}<br>
Extra Toppings :  

@foreach($pizza->toppings as $toppings)
 <li>{{$toppings}}</li>
 @endforeach;
 </ul>
 
<form  action="/pizzas/{{$pizza->id}}" method="POST">
<button> Complete Order</button>
@method('DELETE')
@csrf
</form>

</div>
<a href="/pizzas">back to all pizzas</a>
@endsection('content')